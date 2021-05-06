package org.aston.quizzapp.data;

import org.aston.quizzapp.models.Quizz;

import javax.inject.Inject;

import dagger.hilt.android.scopes.ActivityRetainedScoped;
import retrofit2.Call;

//@ActivityRetainedScoped
public class QuizzRepository {


    public QuizzRemoteDataSource quizzRemoteDataSource;

    @Inject
    public QuizzRepository(QuizzRemoteDataSource quizzRemoteDataSource) {
        this.quizzRemoteDataSource = quizzRemoteDataSource;
    }


    public Call<Quizz> getQuizz(Integer quizzId){
        return quizzRemoteDataSource.getQuizz(quizzId);
    }

    public Call<Quizz> updateQuizz(Quizz quizz, Integer quizzId){
        return quizzRemoteDataSource.updateQuizz(quizz, quizzId);
    }
}
