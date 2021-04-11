package org.aston.quizzapp.models;

import com.google.gson.annotations.SerializedName;

public class Role{

	@SerializedName("id")
	private Integer id;

	@SerializedName("roleName")
	private String roleName;


	// getters
	public Integer getId(){
		return id;
	}

	public String getRoleName(){
		return roleName;
	}

	// setters
	public void setId(Integer id){
		this.id = id;
	}

	public void setRoleName(String roleName){
		this.roleName = roleName;
	}
}