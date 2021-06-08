package org.aston.quizzapp.viewmodel;

import android.app.Application;
import androidx.annotation.NonNull;
import androidx.hilt.lifecycle.ViewModelAssistedFactory;
import androidx.lifecycle.SavedStateHandle;
import java.lang.Override;
import javax.annotation.Generated;
import javax.inject.Inject;
import javax.inject.Provider;
import org.aston.quizzapp.data.GameRepository;

@Generated("androidx.hilt.AndroidXHiltProcessor")
public final class GameViewModel_AssistedFactory implements ViewModelAssistedFactory<GameViewModel> {
  private final Provider<Application> application;

  private final Provider<GameRepository> gameRepository;

  @Inject
  GameViewModel_AssistedFactory(Provider<Application> application,
      Provider<GameRepository> gameRepository) {
    this.application = application;
    this.gameRepository = gameRepository;
  }

  @Override
  @NonNull
  public GameViewModel create(@NonNull SavedStateHandle arg0) {
    return new GameViewModel(application.get(), gameRepository.get());
  }
}
