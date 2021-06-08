package org.aston.quizzapp.viewmodel;

import android.app.Application;
import dagger.internal.Factory;
import javax.annotation.Generated;
import javax.inject.Provider;
import org.aston.quizzapp.data.CategoryRepository;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class CategoryViewModel_AssistedFactory_Factory implements Factory<CategoryViewModel_AssistedFactory> {
  private final Provider<Application> applicationProvider;

  private final Provider<CategoryRepository> categoryRepositoryProvider;

  public CategoryViewModel_AssistedFactory_Factory(Provider<Application> applicationProvider,
      Provider<CategoryRepository> categoryRepositoryProvider) {
    this.applicationProvider = applicationProvider;
    this.categoryRepositoryProvider = categoryRepositoryProvider;
  }

  @Override
  public CategoryViewModel_AssistedFactory get() {
    return newInstance(applicationProvider, categoryRepositoryProvider);
  }

  public static CategoryViewModel_AssistedFactory_Factory create(
      Provider<Application> applicationProvider,
      Provider<CategoryRepository> categoryRepositoryProvider) {
    return new CategoryViewModel_AssistedFactory_Factory(applicationProvider, categoryRepositoryProvider);
  }

  public static CategoryViewModel_AssistedFactory newInstance(Provider<Application> application,
      Provider<CategoryRepository> categoryRepository) {
    return new CategoryViewModel_AssistedFactory(application, categoryRepository);
  }
}
