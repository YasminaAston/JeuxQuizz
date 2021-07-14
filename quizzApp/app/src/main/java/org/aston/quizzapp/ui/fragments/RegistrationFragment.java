package org.aston.quizzapp.ui.fragments;

import android.os.Bundle;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.navigation.Navigation;

import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import org.aston.quizzapp.R;
import org.aston.quizzapp.data.network.UserApi;
import org.aston.quizzapp.databinding.FragmentLoginBinding;
import org.aston.quizzapp.databinding.FragmentRegistrationBinding;
import org.aston.quizzapp.di.NetworkModule;
import org.aston.quizzapp.models.User;
import org.aston.quizzapp.ui.MainActivity;
import org.aston.quizzapp.util.Constants;

import java.io.IOException;

import okhttp3.OkHttpClient;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;


public class RegistrationFragment extends Fragment implements View.OnClickListener {

    private FragmentRegistrationBinding binding;
    private Button registerMeBtn;
    private TextView backToLoginLink;

    public RegistrationFragment() {
        // Required empty public constructor
    }

    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container,
                             @Nullable Bundle savedInstanceState) {
        binding = FragmentRegistrationBinding.inflate(inflater, container, false);
        View view = binding.getRoot();

        registerMeBtn = binding.loginBtn;
        registerMeBtn.setOnClickListener(this);

        backToLoginLink = binding.backToLoginLinkTv;
        backToLoginLink.setOnClickListener(this::goBackToLogin);
        return view;
    }

    @Override
    public void onClick(View view) {
        String email = binding.emailEt.getText().toString();
        String password = binding.passwordEt.getText().toString();
        String firstname = binding.firstnameEt.getText().toString();
        String lastname = binding.lastnameEt.getText().toString();
        String username = binding.usernameEt.getText().toString();


        User user = new User();
        user.setEmail(email);
        user.setFirstname(firstname);
        user.setLastname(lastname);
        user.setUsername(username);
        user.setPassword(password);
        System.out.println(user);

        Call<User> call = createApi().addUser(user);
        call.enqueue(new Callback<User>() {
            @Override
            public void onResponse(Call<User> call, Response<User> response) {

                if (response.isSuccessful()) {
                    String s = response.body().toString();
                    Toast.makeText(getActivity(), s, Toast.LENGTH_LONG).show();
                } else {
                    Toast.makeText(getActivity(), "error brah !", Toast.LENGTH_LONG).show();
                }
            }

            @Override
            public void onFailure(Call<User> call, Throwable t) {
                Toast.makeText(getActivity(),t.getMessage(), Toast.LENGTH_LONG).show();
            }
        });

    }

    public void goBackToLogin(View view) {
        Navigation.findNavController(view).navigate(R.id.login_fragment);
    }


    private UserApi createApi() {
        Retrofit retrofit = new Retrofit.Builder()
                .baseUrl(Constants.API_URL)
                .addConverterFactory(GsonConverterFactory.create())
                .build();

        return retrofit.create(UserApi.class);
    }

}