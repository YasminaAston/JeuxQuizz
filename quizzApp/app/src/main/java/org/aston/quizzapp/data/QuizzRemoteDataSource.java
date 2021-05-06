package org.aston.quizzapp.data;


import org.aston.quizzapp.data.network.QuizzApi;
import org.aston.quizzapp.models.Quizz;

import javax.inject.Inject;

import retrofit2.Call;
import retrofit2.Response;

public class QuizzRemoteDataSource {

    public QuizzApi quizzApi;

    @Inject
    public QuizzRemoteDataSource(QuizzApi quizzApi) {
        this.quizzApi = quizzApi;
    }


    public Call<Quizz> getQuizz(Integer quizzId){
        return quizzApi.getQuizz(quizzId);
    }

    public Call<Quizz> updateQuizz(Quizz quizz, Integer quizzId){
        return quizzApi.updateQuizz(quizz, quizzId);
    }

}
