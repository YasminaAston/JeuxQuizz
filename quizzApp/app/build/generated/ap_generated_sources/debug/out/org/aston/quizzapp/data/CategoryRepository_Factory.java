package org.aston.quizzapp.data;

import dagger.internal.Factory;
import javax.annotation.Generated;
import javax.inject.Provider;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class CategoryRepository_Factory implements Factory<CategoryRepository> {
  private final Provider<CategoryRemoteDataSource> categoryRemoteDataSourceProvider;

  public CategoryRepository_Factory(
      Provider<CategoryRemoteDataSource> categoryRemoteDataSourceProvider) {
    this.categoryRemoteDataSourceProvider = categoryRemoteDataSourceProvider;
  }

  @Override
  public CategoryRepository get() {
    return newInstance(categoryRemoteDataSourceProvider.get());
  }

  public static CategoryRepository_Factory create(
      Provider<CategoryRemoteDataSource> categoryRemoteDataSourceProvider) {
    return new CategoryRepository_Factory(categoryRemoteDataSourceProvider);
  }

  public static CategoryRepository newInstance(CategoryRemoteDataSource categoryRemoteDataSource) {
    return new CategoryRepository(categoryRemoteDataSource);
  }
}
