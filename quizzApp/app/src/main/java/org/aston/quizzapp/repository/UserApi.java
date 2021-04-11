package org.aston.quizzapp.repository;

import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.models.Quizz;
import org.aston.quizzapp.models.User;

import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.PUT;
import retrofit2.http.Path;

public interface UserApi {

    @POST("/users/new")
    Call<User> addUser(@Body User user);

    @GET("/users/{id}")
    Call<User> startNewGame(@Path("id") Integer userId);
}
