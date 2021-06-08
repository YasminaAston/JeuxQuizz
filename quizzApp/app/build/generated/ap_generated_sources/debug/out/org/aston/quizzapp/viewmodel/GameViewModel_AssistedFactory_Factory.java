package org.aston.quizzapp.viewmodel;

import android.app.Application;
import dagger.internal.Factory;
import javax.annotation.Generated;
import javax.inject.Provider;
import org.aston.quizzapp.data.GameRepository;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class GameViewModel_AssistedFactory_Factory implements Factory<GameViewModel_AssistedFactory> {
  private final Provider<Application> applicationProvider;

  private final Provider<GameRepository> gameRepositoryProvider;

  public GameViewModel_AssistedFactory_Factory(Provider<Application> applicationProvider,
      Provider<GameRepository> gameRepositoryProvider) {
    this.applicationProvider = applicationProvider;
    this.gameRepositoryProvider = gameRepositoryProvider;
  }

  @Override
  public GameViewModel_AssistedFactory get() {
    return newInstance(applicationProvider, gameRepositoryProvider);
  }

  public static GameViewModel_AssistedFactory_Factory create(
      Provider<Application> applicationProvider, Provider<GameRepository> gameRepositoryProvider) {
    return new GameViewModel_AssistedFactory_Factory(applicationProvider, gameRepositoryProvider);
  }

  public static GameViewModel_AssistedFactory newInstance(Provider<Application> application,
      Provider<GameRepository> gameRepository) {
    return new GameViewModel_AssistedFactory(application, gameRepository);
  }
}
