package org.aston.quizzapp.models;

import com.google.gson.annotations.SerializedName;

public class Score{

	@SerializedName("id")
	private Integer id;

	@SerializedName("score")
	private int score;

	// getters
	public int getScore(){
		return score;
	}

	public Integer getId(){
		return id;
	}

	// setters

	public void setId(Integer id) {
		this.id = id;
	}

	public void setScore(int score) {
		this.score = score;
	}
}