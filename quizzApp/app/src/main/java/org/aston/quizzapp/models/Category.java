package org.aston.quizzapp.models;

import com.google.gson.annotations.SerializedName;

public class Category{

	@SerializedName("id")
	private Integer id;

	@SerializedName("name")
	private String name;


    // getters
	public Integer getId(){
		return id;
	}

	public String getName(){
		return name;
	}

	// setters
	public void setId(int id){
		this.id = id;
	}

	public void setName(String name){
		this.name = name;
	}




}