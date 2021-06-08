package org.aston.quizzapp.viewmodel;

import android.app.Application;
import dagger.internal.Factory;
import javax.annotation.Generated;
import javax.inject.Provider;
import org.aston.quizzapp.data.QuizzRepository;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class QuizzViewModel_AssistedFactory_Factory implements Factory<QuizzViewModel_AssistedFactory> {
  private final Provider<Application> applicationProvider;

  private final Provider<QuizzRepository> quizzRepositoryProvider;

  public QuizzViewModel_AssistedFactory_Factory(Provider<Application> applicationProvider,
      Provider<QuizzRepository> quizzRepositoryProvider) {
    this.applicationProvider = applicationProvider;
    this.quizzRepositoryProvider = quizzRepositoryProvider;
  }

  @Override
  public QuizzViewModel_AssistedFactory get() {
    return newInstance(applicationProvider, quizzRepositoryProvider);
  }

  public static QuizzViewModel_AssistedFactory_Factory create(
      Provider<Application> applicationProvider,
      Provider<QuizzRepository> quizzRepositoryProvider) {
    return new QuizzViewModel_AssistedFactory_Factory(applicationProvider, quizzRepositoryProvider);
  }

  public static QuizzViewModel_AssistedFactory newInstance(Provider<Application> application,
      Provider<QuizzRepository> quizzRepository) {
    return new QuizzViewModel_AssistedFactory(application, quizzRepository);
  }
}
