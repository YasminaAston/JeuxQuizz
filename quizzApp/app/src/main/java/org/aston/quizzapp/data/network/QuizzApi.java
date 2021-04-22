package org.aston.quizzapp.data.network;

import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.models.Quizz;

import retrofit2.Call;
import retrofit2.Response;
import retrofit2.http.Body;
import retrofit2.http.GET;
import retrofit2.http.PUT;
import retrofit2.http.Path;

public interface QuizzApi {



    @PUT("quizzes/{id}/update")
    Call<Quizz> updateQuizz(@Body Quizz quizz, @Path("id") int quizzId);

    @GET("quizzes/{id}")
    Call<Quizz> getQuizz(@Path("id") int quizzId);
}
