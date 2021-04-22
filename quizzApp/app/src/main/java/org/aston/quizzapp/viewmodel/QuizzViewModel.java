package org.aston.quizzapp.viewmodel;

import android.app.Application;

import androidx.annotation.NonNull;
import androidx.hilt.lifecycle.ViewModelInject;
import androidx.lifecycle.AndroidViewModel;

import org.aston.quizzapp.data.QuizzRepository;


public class QuizzViewModel extends AndroidViewModel {

    private QuizzRepository quizzRepository;

    @ViewModelInject
    public QuizzViewModel(@NonNull Application application, QuizzRepository quizzRepository) {
        super(application);
        this.quizzRepository = quizzRepository;
    }
}
