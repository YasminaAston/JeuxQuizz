package org.aston.quizzapp.data;

import org.aston.quizzapp.dto.GameDto;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Game;

import javax.inject.Inject;

import dagger.hilt.android.scopes.ActivityRetainedScoped;
import io.reactivex.rxjava3.core.Observable;
import retrofit2.Call;
import retrofit2.Response;

//@ActivityRetainedScoped
public class GameRepository {


    private GameRemoteDataSource gameRemoteDataSource;


    @Inject
    public GameRepository(GameRemoteDataSource gameRemoteDataSource) {
        this.gameRemoteDataSource = gameRemoteDataSource;
    }

    public Call<Game> startGame(QuizzDto quizzDto){
        return gameRemoteDataSource.startGame(quizzDto);
    }

    public Call<Game> updateScoreGame(GameDto gameDto){
        return gameRemoteDataSource.updateScoreGame(gameDto);
    }

    public Call<Game> getGame(int gameId){
        return gameRemoteDataSource.getGame(gameId);
    }

}
