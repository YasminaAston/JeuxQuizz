package org.aston.quizzapp.repository;

import org.aston.quizzapp.dto.GameDto;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.models.Quizz;

import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.PUT;
import retrofit2.http.Path;

public interface QuizzService {



    @PUT("/quizzes/{id}/update")
    Call<Game> updateGame(@Body Quizz quizz, @Path("id") Integer quizzId);

    @GET("/quizzes/{id}")
    Call<Game> startNewGame(@Path("id") Integer quizzId);
}
