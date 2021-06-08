package org.aston.quizzapp.viewmodel;

import android.app.Application;
import androidx.annotation.NonNull;
import androidx.hilt.lifecycle.ViewModelAssistedFactory;
import androidx.lifecycle.SavedStateHandle;
import java.lang.Override;
import javax.annotation.Generated;
import javax.inject.Inject;
import javax.inject.Provider;
import org.aston.quizzapp.data.CategoryRepository;

@Generated("androidx.hilt.AndroidXHiltProcessor")
public final class CategoryViewModel_AssistedFactory implements ViewModelAssistedFactory<CategoryViewModel> {
  private final Provider<Application> application;

  private final Provider<CategoryRepository> categoryRepository;

  @Inject
  CategoryViewModel_AssistedFactory(Provider<Application> application,
      Provider<CategoryRepository> categoryRepository) {
    this.application = application;
    this.categoryRepository = categoryRepository;
  }

  @Override
  @NonNull
  public CategoryViewModel create(@NonNull SavedStateHandle arg0) {
    return new CategoryViewModel(application.get(), categoryRepository.get());
  }
}
