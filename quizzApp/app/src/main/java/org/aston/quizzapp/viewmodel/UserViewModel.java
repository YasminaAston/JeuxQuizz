package org.aston.quizzapp.viewmodel;

import android.app.Application;

import androidx.annotation.NonNull;
import androidx.hilt.lifecycle.ViewModelInject;
import androidx.lifecycle.AndroidViewModel;

import org.aston.quizzapp.data.UserRepository;


//@HiltViewModel
public class UserViewModel extends AndroidViewModel {

    private UserRepository userRepository;

    @ViewModelInject
    public UserViewModel(@NonNull Application application, UserRepository userRepository) {
        super(application);
        this.userRepository = userRepository;
    }
}
