import React from 'react';
import ReactDOM from 'react-dom';

class Board extends React.Component {
  state = {
    userNo: window.gon().userNo,
    writer: window.gon().userName,
    login: window.gon().userNo ? '로그아웃' : '로그인',
    content: '',
    boardList: []
  }

  componentDidMount() {
    const xhr = new XMLHttpRequest();
    xhr.onload = () => {
      if (xhr.status === 200 || xhr.status === 201) {
        const data = JSON.parse(xhr.responseText);
        this.setState({
          boardList : data
        })
      } else {
        // console.error(xhr.responseText);
      }
    };
    xhr.open(
      'GET',
      `./server/board.php`,
    );
    xhr.send();
  }

  dataCheckHandler() {
    let msg = '';
    let err = false;
    !err && !this.state.writer && (msg = '닉네임을 입력해주세요!') && (err = true);
    !err && !this.state.content && (msg = '내용을 입력해주세요!') && (err = true);
    err ? alert(msg) : this.insertBoardHandler();
  }

  onChangeDataHandler(e) {
    const key = e.target.name;
    let value = e.target.value;
    this.setState({
      [key] : value
    });
  }

  insertBoardHandler() {
    const xhr = new XMLHttpRequest();
    const formData = new FormData();
    formData.append('user_no', this.state.userNo);
    formData.append('writer', this.state.writer);
    formData.append('content',this.state.content);
    xhr.onload = () => {
      if (xhr.status === 200 || xhr.status === 201) {
        const data = JSON.parse(xhr.responseText);
        window.location.reload();
      } else {
        // console.error(xhr.responseText);
      }
    };
    xhr.open(
      'POST',
      `./server/board.php`,
    );
    xhr.send(formData);
  }

  loginHandler() {
    const xhr = new XMLHttpRequest();
    xhr.onload = () => {
      if (xhr.status === 200 || xhr.status === 201) {
        window.location = './login.php';
      } else {
        // console.error(xhr.responseText);
      }
    };
    xhr.open(
      'DELETE',
      `./server/login.php`,
    );
    xhr.send();
  }

  render() {
      return (
        <section>
          <h1>게시판</h1>
          <a href="./index.php">홈으로 돌아가기</a>
          <br/>
          {
            this.state.userNo && (
              <React.Fragment>
                <label>
                  닉네임 : <input type="text" name="writer" defaultValue={this.state.writer} onChange={(e)=>{this.onChangeDataHandler(e);}}/>
                </label>
                <label>
                  내용 : <input type="text" name="content" onChange={(e)=>{this.onChangeDataHandler(e);}}/>
                </label>
                <button onClick={()=>{this.dataCheckHandler()}}>작성</button>
              </React.Fragment>
            )
          }
          <br/>
          <button onClick={()=>{this.loginHandler()}}>{this.state.login}</button>
          <br/>
          <br/>
          <table>
            <tr>
              <th>번호</th>
              <th>작성자</th>
              <th>내용</th>
              <th>작성일</th>
            </tr>
            <React.Fragment>
            {
              this.state.boardList.length ? this.state.boardList.map((item,key)=>{
                return (
                  <tr>
                    <td>{item.no}</td>
                    <td>{item.writer}</td>
                    <td>{item.content}</td>
                    <td>{item.created_at}</td>
                  </tr>
                )
              })
              :
              <tr>
                <td colSpan="4">
                  글이 없습니다!
                </td>
              </tr>
            }
            </React.Fragment>
          </table>
        </section>
      )
  }
}



ReactDOM.render(<Board/>, document.getElementById('root'));