package org.aston.quizzapp.data.network;

import org.aston.quizzapp.dto.GameDto;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Game;


import io.reactivex.rxjava3.core.Observable;
import retrofit2.Call;
import retrofit2.Response;
import retrofit2.http.Body;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.PUT;
import retrofit2.http.Path;

public interface GameApi {

    @POST("games/new")
    Call<Game> startNewGame(@Body QuizzDto quizzDto);

    @PUT("games/update_score")
    Call<Game> updateGame(@Body GameDto gameDto);

    @GET("games/{id}")
    Call<Game> getGameById(@Path("id") int gameId);
}
