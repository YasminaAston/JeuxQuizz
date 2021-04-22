package org.aston.quizzapp.data;


import org.aston.quizzapp.data.network.GameApi;
import org.aston.quizzapp.dto.GameDto;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.models.Score;
import org.aston.quizzapp.models.User;

import javax.inject.Inject;

import io.reactivex.rxjava3.core.Observable;
import retrofit2.Call;
import retrofit2.Response;

public class GameRemoteDataSource {

    private GameApi gameApi;

    @Inject
    public GameRemoteDataSource(GameApi gameApi) {
        this.gameApi = gameApi;
    }


    public Call<Game> startGame(QuizzDto quizzDto){
        return gameApi.startNewGame(quizzDto);
    }

    public Call<Game> updateScoreGame(GameDto gameDto){
        return gameApi.updateGame(gameDto);
    }

    public Call<Game> getGame(int gameId){
       return gameApi.getGameById(gameId);
       /*
        Game game = new Game();
        game.setId(111111111);
        game.setScore(new Score());
        game.setUser(new User());
       return game;

        */
    }
}
