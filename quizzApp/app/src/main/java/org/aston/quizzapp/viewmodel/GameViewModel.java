package org.aston.quizzapp.viewmodel;

import android.app.Application;
import android.content.Context;
import android.net.ConnectivityManager;
import android.net.Network;
import android.net.NetworkCapabilities;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.hilt.lifecycle.ViewModelInject;
import androidx.lifecycle.AndroidViewModel;
import androidx.lifecycle.MutableLiveData;

import org.aston.quizzapp.QuizzApplication;
import org.aston.quizzapp.data.GameRepository;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.util.NetworkResult;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;


public class GameViewModel extends AndroidViewModel {

    private final GameRepository gameRepository;
    private Context context;
    public MutableLiveData<Game> gameMutableLiveData = new MutableLiveData<Game>();

    @ViewModelInject
    public GameViewModel(@NonNull Application application, GameRepository gameRepository) {
        super(application);
        this.gameRepository = gameRepository;
        context = getApplication().getApplicationContext();
    }


   public void startGame(QuizzDto quizzDto){
       gameMutableLiveData.setValue(new Game());
        if (hasInternaetConnection()){
          try {
            Call<Game> gameResponse = gameRepository.startGame(quizzDto);
              gameResponse.enqueue(new Callback<Game>() {
                  @Override
                  public void onResponse(Call<Game> call, Response<Game> response) {
                      if(response.isSuccessful()){
                          gameMutableLiveData.setValue(response.body());
                          System.out.println(response.body());
                          Toast.makeText(context, "Game Starting  ", Toast.LENGTH_SHORT).show();
                      }
                  }

                  @Override
                  public void onFailure(Call<Game> call, Throwable t) {
                      Toast.makeText(context, "Error "+t.getMessage(), Toast.LENGTH_SHORT).show();
                  }
              });
          }catch (Exception e){
              Toast.makeText(context, "Error "+e.getMessage(), Toast.LENGTH_SHORT).show();
         }
        }else{
            Toast.makeText(context, "No Internet Connection", Toast.LENGTH_SHORT).show();
        }

   }


    public void getGame(int gameId){
        System.out.println("hasInternaetConnection() "+ hasInternaetConnection());
        if (hasInternaetConnection()){
            try {
                System.out.println("Start get game");
                Call<Game> gameResponse = gameRepository.getGame(1);
                gameResponse.enqueue(new Callback<Game>() {
                    @Override
                    public void onResponse(Call<Game> call, Response<Game> response) {
                        if(response.isSuccessful()){
                            gameMutableLiveData.setValue(response.body());
                            System.out.println("affiche game ");
                            System.out.println(response.body());
                            System.out.println("gameMutableLiveData.getValue()  ");
                            System.out.println(gameMutableLiveData.getValue());
                            Toast.makeText(context, "game getting  ", Toast.LENGTH_SHORT).show();
                        }
                    }

                    @Override
                    public void onFailure(Call<Game> call, Throwable t) {
                        Toast.makeText(context, "Error "+t.getMessage(), Toast.LENGTH_SHORT).show();
                    }
                });

                System.out.println("get game from repo");
                System.out.println(gameMutableLiveData.getValue());
            }catch (Exception e){
                Toast.makeText(context, "Error "+e.getMessage(), Toast.LENGTH_SHORT).show();
            }
        }else{
            Toast.makeText(context, "No Internet Connection", Toast.LENGTH_SHORT).show();
        }
    }

    private boolean hasInternaetConnection() {
        ConnectivityManager connectivityManager  = (ConnectivityManager) getApplication(). getSystemService(Context.CONNECTIVITY_SERVICE);
        Network network = connectivityManager.getActiveNetwork();
        if (network == null) return false;
        NetworkCapabilities networkCapabilities = connectivityManager.getNetworkCapabilities(network);
        if (networkCapabilities == null) return false;
        return networkCapabilities.hasTransport(NetworkCapabilities.TRANSPORT_WIFI)
                || networkCapabilities.hasTransport(NetworkCapabilities.TRANSPORT_CELLULAR)
                || networkCapabilities.hasTransport(NetworkCapabilities.TRANSPORT_ETHERNET)
                || networkCapabilities.hasTransport(NetworkCapabilities.TRANSPORT_VPN);
    }
}
