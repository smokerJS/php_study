import React from 'react';
import ReactDOM from 'react-dom';
const timeoutHandler = {
  changeId : null,
  changePhone : null,
}
class Index extends React.Component {
  state = {
    id: '',
    idErrorMsg: '',
    name: '',
    nameErrorMsg: '',
    password: '',
    passwordErrorMsg: '',
    birth: '',
    phone: '',
    phoneErrorMsg: '',
    email: '',
    emailErrorMsg: '',
    message: false,
  }

  dataCheckHandler() {
    let msg = '필수문항을 모두 작성해주세요!';
    let err = false;
    (this.state.idErrorMsg || !this.state.id) && (err = true);
    !err && (this.state.nameErrorMsg || !this.state.name) && (err = true);
    !err && (this.state.passwordErrorMsg || !this.state.password) && (err = true);
    !err && this.state.phoneErrorMsg && (msg = this.state.phoneErrorMsg) && (err = true);
    !err && this.state.emailErrorMsg && (msg = '이메일 포맷이 아닙니다!') && (err = true);
    err ? alert(msg) : this.insertUserHandler();
  }

  onChangeIdHandler(e) {
    const id = e.target.value.toLowerCase();
    if(id.length > 12 || id.length < 4 || !/^[0-9a-zA-Z]+$/.test(id)) {
      this.setState({
        idErrorMsg: 'ID는 4~12자 사이의 영문과 숫자만 사용가능합니다!',
        passwordErrorMsg : ''
      });
      return;
    }else {
      this.setState({
        idErrorMsg: ''
      });
    }
    timeoutHandler.changeId && clearTimeout(timeoutHandler.changeId);
    timeoutHandler.changeId = setTimeout(() => {
      const xhr = new XMLHttpRequest();
      const query = `?type=id&value=${id}`;
      xhr.onload = () => {
        if (xhr.status === 200 || xhr.status === 201) {
          const data = JSON.parse(xhr.responseText);
          this.setState({
            id: id,
            idErrorMsg: data && data.id ? '중복된 아이디입니다!' : '',
            passwordErrorMsg : this.state.password && (id === this.state.password) ? 'ID와 동일한 비밀번호는 사용할 수 없습니다!' : ''
          });
        } else {
          // console.error(xhr.responseText);
        }
      };
      xhr.open(
        'GET',
        `./server/user.php${query}`,
      );
      xhr.send();
    }, 300);
  }

  onChangePasswordHandler(e) {
    const password = e.target.value;
    this.setState({
      password: password,
      passwordErrorMsg: this.state.id && (this.state.id === password) ? 'ID와 동일한 비밀번호는 사용할 수 없습니다!' : ''
    });
  }

  onChangeNameHandler(e) {
    const name = e.target.value;
    this.setState({
      name: name,
      nameErrorMsg: /^[가-힣a-zA-Z]+$/.test(name) ? '' : '이름은 한글과 영문만 사용이 가능합니다!'
    });
  }

  onChangePhoneHandler(e) {
    const phone = e.target.value;
    if(!phone) {
      this.setState({
        phone: '',
        phoneErrorMsg: ''
      });
      return;
    }

    if(!/^[0-9]+$/.test(phone)) {
      this.setState({
        phoneErrorMsg: '핸드폰 번호는 숫자만 입력이 가능합니다!'
      });
      return;
    }

    timeoutHandler.changePhone && clearTimeout(timeoutHandler.changePhone);
    timeoutHandler.changePhone = setTimeout(() => {
      const xhr = new XMLHttpRequest();
      const query = `?type=phone&value=${phone}`;
      xhr.onload = () => {
        if (xhr.status === 200 || xhr.status === 201) {
          const data = JSON.parse(xhr.responseText);
          this.setState({
            phone: phone,
            phoneErrorMsg: data && data.phone ? '중복된 번호입니다!' : '',
          });
        } else {
          // console.error(xhr.responseText);
        }
      };
      xhr.open(
        'GET',
        `./server/user.php${query}`,
      );
      xhr.send();
    }, 300);
  }

  onChangeEmailHandler(e) {
    const value = e.target.value;
    const msg = value ? '이메일 포맷이 아닙니다!' : '';
    this.setState({
      email: value ? value : '',
      emailErrorMsg: value && /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i.test(value) ? '' : msg
    });
  }

  onChangeDataHandler(e) {
    const key = e.target.name;
    let value = e.target.value;
    key === 'message' && (value = Number(e.target.checked));
    this.setState({
      [key] : value
    })
  }

  insertUserHandler() {
    const xhr = new XMLHttpRequest();
    const formData = new FormData();
    formData.append('id', this.state.id);
    formData.append('name',this.state.name);
    formData.append('password',this.state.password);
    formData.append('birth',this.state.birth);
    formData.append('phone',this.state.phone);
    formData.append('email',this.state.email);
    formData.append('message',this.state.message);

    xhr.onload = () => {
      if (xhr.status === 200 || xhr.status === 201) {
        const data = JSON.parse(xhr.responseText);
        console.log(data);

      } else {
        // console.error(xhr.responseText);
      }
    };
    xhr.open(
      'POST',
      './server/user.php',
    );
    xhr.send(formData);
  }

  render() {
      return (
        <section>
          <h1>회원가입</h1>
          <label>
            ID : <input type="text" onChange={(e)=>{this.onChangeIdHandler(e);}}/>
            {
              this.state.idErrorMsg &&
              (
                <span>{this.state.idErrorMsg}</span>
              )
            }
          </label>
          <br/>
          <label>
            Password : <input type="password" onChange={(e)=>{this.onChangePasswordHandler(e);}}/>
            {
              this.state.passwordErrorMsg &&
              (
                <span>{this.state.passwordErrorMsg}</span>
                )
              }
          </label>
          <br/>
          <label>
            Name : <input type="text" onChange={(e)=>{this.onChangeNameHandler(e);}}/>
            {
              this.state.nameErrorMsg &&
              (
                <span>{this.state.nameErrorMsg}</span>
              )
            }
          </label>
          <br/>
          <label>
            Birth : <input type="date" name="birth" onChange={(e)=>{this.onChangeDataHandler(e);}}/>
          </label>
          <br/>
          <label>
            phone : <input type="text" onChange={(e)=>{this.onChangePhoneHandler(e);}}/>
            {
              this.state.phoneErrorMsg &&
              (
                <span>{this.state.phoneErrorMsg}</span>
              )
            }
          </label>
          <br/>
          <label>
            email : <input type="text" onChange={(e)=>{this.onChangeEmailHandler(e);}}/>
            {
              this.state.emailErrorMsg &&
              (
                <span>{this.state.emailErrorMsg}</span>
              )
            }
          </label>
          <br/>
          <label>
            문자수신 동의(선택) <input type="checkbox" id="message" name="message" onClick={(e)=>{this.onChangeDataHandler(e);}}/>
          </label>
          <br/>
          <button onClick={()=>{this.dataCheckHandler();}}>회원가입</button>
          <br/>
          <a href="./index.php">홈으로 돌아가기</a>
        </section>
      )
  }

}

ReactDOM.render(<Index/>, document.getElementById('root'));