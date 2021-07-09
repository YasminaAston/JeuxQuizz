package org.aston.quizzapp.ui.fragments;

import android.os.Bundle;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

import androidx.navigation.Navigation;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;

import org.aston.quizzapp.R;
import org.aston.quizzapp.databinding.FragmentLoginBinding;


public class LoginFragment<loginFragment> extends Fragment implements View.OnClickListener {

    private FragmentLoginBinding binding;
    private Button logMeBtn;
    private TextView registerMeLink;

    public LoginFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container,
                             @Nullable Bundle savedInstanceState) {
        binding = FragmentLoginBinding.inflate(inflater, container, false);
        View view = binding.getRoot();
        logMeBtn = binding.loginBtn;
        logMeBtn.setOnClickListener(this);

        registerMeLink = binding.registerMeLkTv;
        registerMeLink.setOnClickListener(this::goToRegister);

        return view;
    }

    @Override
    public void onClick(View view) {
        String emailEt = binding.emailEt.getText().toString();
        String password = binding.passwordEt.getText().toString();
        System.out.println(emailEt);
        return;
    }

    public void goToRegister(View view) {
            Navigation.findNavController(view).navigate(R.id.registration_fragment);
    }

}