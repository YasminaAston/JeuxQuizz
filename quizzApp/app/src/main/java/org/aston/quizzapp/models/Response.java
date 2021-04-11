package org.aston.quizzapp.models;

import com.google.gson.annotations.SerializedName;

public class Response {

	@SerializedName("id")
	private Integer id;

	@SerializedName("label")
	private String label;

	@SerializedName("isCorrect")
	private boolean isCorrect;

	// getters
	public Integer getId(){
		return id;
	}

	public String getLabel(){
		return label;
	}

	public boolean isIsCorrect(){
		return isCorrect;
	}

	// setters
	public void setId(Integer id) {
		this.id = id;
	}

	public void setLabel(String label) {
		this.label = label;
	}

	public void setCorrect(boolean correct) {
		isCorrect = correct;
	}
}