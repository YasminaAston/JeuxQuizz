package org.aston.quizzapp.repository;

import org.aston.quizzapp.dto.GameDto;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Game;

import java.util.Map;

import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.PUT;
import retrofit2.http.Path;
import retrofit2.http.QueryMap;

public interface GameService {

    @POST("/games/new")
    Call<Game> startNewGame(@Body QuizzDto quizzDto);

    @PUT("/games/update_score")
    Call<Game> updateGame(@Body GameDto gameDto);

    @GET("/games/{id}")
    Call<Game> startNewGame(@Path("id") Integer gameId);
}
