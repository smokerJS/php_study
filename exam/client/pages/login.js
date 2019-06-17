import React from 'react';
import ReactDOM from 'react-dom';

class Login extends React.Component {
  state = {
    id: '',
    password: '',
    errorMsg: '',
  }

  dataCheckHandler() {
    let msg = '';
    let err = false;
    !err && !this.state.id && (msg = 'ID를 입력해주세요!') && (err = true);
    !err && !this.state.password && (msg = '비밀번호를 입력해주세요!') && (err = true);
    err ? this.setState({errorMsg : msg}) : this.loginHandler();
  }

  onChangeDataHandler(e) {
    const key = e.target.name;
    let value = e.target.value;
    this.setState({
      [key] : value,
      errorMsg : ''
    });
  }

  loginHandler() {
    const xhr = new XMLHttpRequest();
    const formData = new FormData();
    formData.append('id', this.state.id);
    formData.append('password',this.state.password);
    xhr.onload = () => {
      if (xhr.status === 200 || xhr.status === 201) {
        const data = JSON.parse(xhr.responseText);
        data === 'success' ? window.location = './board.php' : this.setState({errorMsg : '해당하는 계정이 없습니다!'});
      } else {
        // console.error(xhr.responseText);
      }
    };
    xhr.open(
      'POST',
      `./server/login.php`,
    );
    xhr.send(formData);
  }



  render() {
      return (
        <section>
          <h1>로그인</h1>
          <label>
            ID : <input type="text" name="id" onChange={(e)=>{this.onChangeDataHandler(e);}}/>
          </label>
          <br/>
          <label>
            Password : <input type="password" name="password" onChange={(e)=>{this.onChangeDataHandler(e);}}/>
          </label>
          <br/>
          {
            this.state.errorMsg &&
            (
              <span>{this.state.errorMsg}</span>
              )
            }
          <br/>
          <button onClick={()=>{this.dataCheckHandler()}}>로그인</button>
          <a href="./index.php">홈으로 돌아가기</a>
        </section>
      )
  }

}

ReactDOM.render(<Login/>, document.getElementById('root'));