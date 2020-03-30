
import Token from './Token' 
import AppStorage from './AppStorage' 
//console.log(res.data)

class User{
	login(data){
		axios.post('/api/auth/login', data)
		 .then(res=> this.responseAfterLogin(res))
		 .catch(error=>console.log(error.response.data))
	}

	responseAfterLogin(res){
		const access_token = res.data.access_token;
		const username = res.data.user;
		console.log(access_token);
		console.log(username);

		if(Token.isValid(access_token)){
			//alert("Test");
			AppStorage.store(username,access_token);
			window.location = '/forum'
		}
	}

	hasToken(){
		const storedToken = AppStorage.getToken();
		if(storedToken){
			return Token.isValid(storedToken) ? true : false
		}

		return false;
		//console.log(storedToken);
	}

	loggedIn(){
		return this.hasToken();
	}

	logout(){
		AppStorage.clear();
		window.location = '/forum'
	}

	name(){
		if(this.loggedIn()){
			return AppStorage.getUser();
		}
	}

	id(){
		if(this.loggedIn()){
			const payload = Token.payload(AppStorage.getToken());
			return payload.sub;
		}
	}
}

export default User = new User();