package org.aston.quizzapp.viewmodel;

import android.app.Application;
import androidx.annotation.NonNull;
import androidx.hilt.lifecycle.ViewModelAssistedFactory;
import androidx.lifecycle.SavedStateHandle;
import java.lang.Override;
import javax.annotation.Generated;
import javax.inject.Inject;
import javax.inject.Provider;
import org.aston.quizzapp.data.UserRepository;

@Generated("androidx.hilt.AndroidXHiltProcessor")
public final class UserViewModel_AssistedFactory implements ViewModelAssistedFactory<UserViewModel> {
  private final Provider<Application> application;

  private final Provider<UserRepository> userRepository;

  @Inject
  UserViewModel_AssistedFactory(Provider<Application> application,
      Provider<UserRepository> userRepository) {
    this.application = application;
    this.userRepository = userRepository;
  }

  @Override
  @NonNull
  public UserViewModel create(@NonNull SavedStateHandle arg0) {
    return new UserViewModel(application.get(), userRepository.get());
  }
}
