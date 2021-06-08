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
public final class QuizzRepository_Factory implements Factory<QuizzRepository> {
  private final Provider<QuizzRemoteDataSource> quizzRemoteDataSourceProvider;

  public QuizzRepository_Factory(Provider<QuizzRemoteDataSource> quizzRemoteDataSourceProvider) {
    this.quizzRemoteDataSourceProvider = quizzRemoteDataSourceProvider;
  }

  @Override
  public QuizzRepository get() {
    return newInstance(quizzRemoteDataSourceProvider.get());
  }

  public static QuizzRepository_Factory create(
      Provider<QuizzRemoteDataSource> quizzRemoteDataSourceProvider) {
    return new QuizzRepository_Factory(quizzRemoteDataSourceProvider);
  }

  public static QuizzRepository newInstance(QuizzRemoteDataSource quizzRemoteDataSource) {
    return new QuizzRepository(quizzRemoteDataSource);
  }
}
