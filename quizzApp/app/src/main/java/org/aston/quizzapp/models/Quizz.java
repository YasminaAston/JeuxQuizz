package org.aston.quizzapp.models;

import com.google.gson.annotations.SerializedName;

public class Quizz {

	@SerializedName("id")
	private Integer id;

	@SerializedName("question")
	private Question question;

	@SerializedName("isCorrect")
	private boolean isCorrect;

	// getters
	public Question getQuestion(){
		return question;
	}

	public int getId(){
		return id;
	}

	public boolean getIsCorrect(){
		return isCorrect;
	}

	// setters
	public void setId(Integer id) {
		this.id = id;
	}

	public void setQuestion(Question question) {
		this.question = question;
	}

	public void setCorrect(boolean correct) {
		isCorrect = correct;
	}
}