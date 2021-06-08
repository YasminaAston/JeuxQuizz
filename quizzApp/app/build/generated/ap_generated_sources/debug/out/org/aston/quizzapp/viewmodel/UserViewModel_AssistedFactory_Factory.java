package org.aston.quizzapp.viewmodel;

import android.app.Application;
import dagger.internal.Factory;
import javax.annotation.Generated;
import javax.inject.Provider;
import org.aston.quizzapp.data.UserRepository;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class UserViewModel_AssistedFactory_Factory implements Factory<UserViewModel_AssistedFactory> {
  private final Provider<Application> applicationProvider;

  private final Provider<UserRepository> userRepositoryProvider;

  public UserViewModel_AssistedFactory_Factory(Provider<Application> applicationProvider,
      Provider<UserRepository> userRepositoryProvider) {
    this.applicationProvider = applicationProvider;
    this.userRepositoryProvider = userRepositoryProvider;
  }

  @Override
  public UserViewModel_AssistedFactory get() {
    return newInstance(applicationProvider, userRepositoryProvider);
  }

  public static UserViewModel_AssistedFactory_Factory create(
      Provider<Application> applicationProvider, Provider<UserRepository> userRepositoryProvider) {
    return new UserViewModel_AssistedFactory_Factory(applicationProvider, userRepositoryProvider);
  }

  public static UserViewModel_AssistedFactory newInstance(Provider<Application> application,
      Provider<UserRepository> userRepository) {
    return new UserViewModel_AssistedFactory(application, userRepository);
  }
}
