import React from 'react';
import ReactDOM from 'react-dom';

class Index extends React.Component {
  state = {
    userNo: window.gon().userNo,
    name: window.gon().userName,
    login: window.gon().userNo ? '로그아웃' : '로그인',
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
          {
            this.state.userNo && (
              <h3>{this.state.name} 로그인중</h3>
            )
          }
          <ul>
            <li>
              <button onClick={()=>{this.loginHandler()}}>{this.state.login}</button>
            </li>
            <li>
              <a href="./join.php">회원가입</a>
            </li>
            <li>
              <a href="./board.php">게시판</a>
            </li>
          </ul>
        </section>
      )
  }

}

ReactDOM.render(<Index/>, document.getElementById('root'));