package org.aston.quizzapp.models;

import com.google.gson.annotations.SerializedName;

public class User{

	@SerializedName("id")
	private Integer id;

	@SerializedName("firstname")
	private String firstname;

	@SerializedName("email")
	private String email;

	@SerializedName("lastname")
	private String lastname;

	@SerializedName("username")
	private String username;

	@SerializedName("role")
	private Role role;

	@SerializedName("password")
	private String password;

	// getters
	public String getFirstname(){
		return firstname;
	}

	public Integer getId(){
		return id;
	}

	public String getEmail(){
		return email;
	}

	public String getLastname(){
		return lastname;
	}

	public String getUsername(){
		return username;
	}

	public Role getRole() {
		return role;
	}

	// setters
	public void setId(Integer id) {
		this.id = id;
	}

	public void setFirstname(String firstname) {
		this.firstname = firstname;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public void setLastname(String lastname) {
		this.lastname = lastname;
	}

	public void setUsername(String username) {
		this.username = username;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public void setRole(Role role) {
		this.role = role;
	}

	@Override
	public String toString() {
		return "User{" +
				"id=" + id +
				", firstname='" + firstname + '\'' +
				", email='" + email + '\'' +
				", lastname='" + lastname + '\'' +
				", username='" + username + '\'' +
				", role=" + role +
				'}';
	}
}