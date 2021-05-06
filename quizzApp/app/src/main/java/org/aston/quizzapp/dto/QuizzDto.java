package org.aston.quizzapp.dto;

public class QuizzDto {

    private Integer userId;
    private Integer categoryId;
    private int difficulty;

    public Integer getUserId() {
        return userId;
    }

    public Integer getCategoryId() {
        return categoryId;
    }

    public int getDifficulty() {
        return difficulty;
    }

    public void setUserId(Integer userId) {
        this.userId = userId;
    }

    public void setCategoryId(Integer categoryId) {
        this.categoryId = categoryId;
    }

    public void setDifficulty(int difficulty) {
        this.difficulty = difficulty;
    }
}
