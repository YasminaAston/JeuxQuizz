package org.aston.quizzapp.models;

import java.util.List;
import com.google.gson.annotations.SerializedName;

public class Question{

	@SerializedName("id")
	private int id;

	@SerializedName("label")
	private String label;

	@SerializedName("difficulty")
	private int difficulty;

	@SerializedName("responses")
	private List<Response> responses;

	@SerializedName("category")
	private Category category;

	// getters
	public int getId() {
		return id;
	}

	public String getLabel() {
		return label;
	}

	public int getDifficulty() {
		return difficulty;
	}

	public List<Response> getResponses() {
		return responses;
	}

	public Category getCategory() {
		return category;
	}

	// setters
	public void setId(int id) {
		this.id = id;
	}

	public void setLabel(String label) {
		this.label = label;
	}

	public void setDifficulty(int difficulty) {
		this.difficulty = difficulty;
	}

	public void setResponses(List<Response> responses) {
		this.responses = responses;
	}

	public void setCategory(Category category) {
		this.category = category;
	}
}