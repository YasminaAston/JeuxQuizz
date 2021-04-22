package org.aston.quizzapp.models;

import java.util.List;
import com.google.gson.annotations.SerializedName;

public class Game {

	@SerializedName("id")
	private int id;

	@SerializedName("score")
	private Score score;

	@SerializedName("quizzes")
	private List<Quizz> quizzes;

	@SerializedName("user")
	private User user;

	// getters
	public Score getScore(){
		return score;
	}

	public int getId(){
		return id;
	}

	public List<Quizz> getQuizzes(){
		return quizzes;
	}

	public User getUser(){
		return user;
	}

	// setters

	public void setId(int id) {
		this.id = id;
	}

	public void setScore(Score score) {
		this.score = score;
	}

	public void setQuizzes(List<Quizz> quizzes) {
		this.quizzes = quizzes;
	}

	public void setUser(User user) {
		this.user = user;
	}

	@Override
	public String toString() {
		return "Game{" +
				"id=" + id +
				", score=" + score +
				", quizzes=" + quizzes +
				", user=" + user +
				'}';
	}
}