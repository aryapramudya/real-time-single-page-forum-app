class AppStorage{
	storeToken(token){
		localStorage.setItem('token',token);
	}

	storeUser(user){
		localStorage.setItem('user',user);
	}

	store(user,token){
		alert('user AppStorage : '+user);
		alert('token AppStorage : '+token);
		this.storeToken(token);
		this.storeUser(user);
	}

	clear(){
		localStorage.removeItem('token');
		localStorage.removeItem('user');
	}

	getToken(){
		return localStorage.getItem('token');
	}

	getUser(){
		return localStorage.getUser('user');
	}
}

export default AppStorage = new AppStorage();