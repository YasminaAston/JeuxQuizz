package org.aston.quizzapp.viewmodel;

import android.app.Application;
import androidx.annotation.NonNull;
import androidx.hilt.lifecycle.ViewModelAssistedFactory;
import androidx.lifecycle.SavedStateHandle;
import java.lang.Override;
import javax.annotation.Generated;
import javax.inject.Inject;
import javax.inject.Provider;
import org.aston.quizzapp.data.QuizzRepository;

@Generated("androidx.hilt.AndroidXHiltProcessor")
public final class QuizzViewModel_AssistedFactory implements ViewModelAssistedFactory<QuizzViewModel> {
  private final Provider<Application> application;

  private final Provider<QuizzRepository> quizzRepository;

  @Inject
  QuizzViewModel_AssistedFactory(Provider<Application> application,
      Provider<QuizzRepository> quizzRepository) {
    this.application = application;
    this.quizzRepository = quizzRepository;
  }

  @Override
  @NonNull
  public QuizzViewModel create(@NonNull SavedStateHandle arg0) {
    return new QuizzViewModel(application.get(), quizzRepository.get());
  }
}
