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
import org.aston.quizzapp.databinding.FragmentRegistrationBinding;


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
        String emailEt = binding.emailEt.getText().toString();
        String password = binding.passwordEt.getText().toString();
        String firstname = binding.firstnameEt.getText().toString();
        String lastname = binding.lastnameEt.getText().toString();
        String username = binding.usernameEt.getText().toString();
        System.out.println(emailEt);
        return;
    }

    public void goBackToLogin(View view) {
        Navigation.findNavController(view).navigate(R.id.login_fragment);
    }
}