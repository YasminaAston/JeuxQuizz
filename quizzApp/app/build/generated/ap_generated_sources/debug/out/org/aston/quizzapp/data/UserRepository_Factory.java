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
public final class UserRepository_Factory implements Factory<UserRepository> {
  private final Provider<UserRemoteDataSource> userRemoteDataSourceProvider;

  public UserRepository_Factory(Provider<UserRemoteDataSource> userRemoteDataSourceProvider) {
    this.userRemoteDataSourceProvider = userRemoteDataSourceProvider;
  }

  @Override
  public UserRepository get() {
    return newInstance(userRemoteDataSourceProvider.get());
  }

  public static UserRepository_Factory create(
      Provider<UserRemoteDataSource> userRemoteDataSourceProvider) {
    return new UserRepository_Factory(userRemoteDataSourceProvider);
  }

  public static UserRepository newInstance(UserRemoteDataSource userRemoteDataSource) {
    return new UserRepository(userRemoteDataSource);
  }
}
