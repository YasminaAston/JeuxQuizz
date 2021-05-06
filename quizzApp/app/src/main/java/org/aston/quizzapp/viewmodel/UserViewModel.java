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

import org.aston.quizzapp.data.UserRemoteDataSource;
import org.aston.quizzapp.data.UserRepository;
import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.models.User;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;


//@HiltViewModel
public class UserViewModel extends AndroidViewModel {

    private UserRepository userRepository;
    private Context context;
    public MutableLiveData<User> userMutableLiveData = new MutableLiveData<User>();

    @ViewModelInject
    public UserViewModel(@NonNull Application application, UserRepository userRepository) {
        super(application);
        this.userRepository = userRepository;
        context = getApplication().getApplicationContext();
    }


    public void getUserInfos(int userId) {
        System.out.println("hasInternaetConnection() " + hasInternaetConnection());
        if (hasInternaetConnection()) {
            try {
                System.out.println("Start get user");
                Call<User> userCall = userRepository.getUserInfos(userId);
                userCall.enqueue(new Callback<User>() {
                    @Override
                    public void onResponse(Call<User> call, Response<User> response) {
                        if (response.isSuccessful()) {
                            userMutableLiveData.setValue(response.body());
                            System.out.println("affiche game ");
                            System.out.println(response.body());
                            System.out.println("gameMutableLiveData.getValue()  ");
                            System.out.println(userMutableLiveData.getValue());
                            Toast.makeText(context, "game getting  ", Toast.LENGTH_SHORT).show();
                        }
                    }
                    @Override
                    public void onFailure(Call<User> call, Throwable t) {
                        Toast.makeText(context, "Error " + t.getMessage(), Toast.LENGTH_SHORT).show();
                    }
                });

                System.out.println("get user from repo");
                System.out.println(userMutableLiveData.getValue());
            } catch (Exception e) {
                Toast.makeText(context, "Error " + e.getMessage(), Toast.LENGTH_SHORT).show();
            }
        } else {
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
