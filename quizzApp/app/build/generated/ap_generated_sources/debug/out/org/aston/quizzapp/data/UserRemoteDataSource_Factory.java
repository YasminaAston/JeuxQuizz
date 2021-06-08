package org.aston.quizzapp.data;

import dagger.internal.Factory;
import javax.annotation.Generated;
import javax.inject.Provider;
import org.aston.quizzapp.data.network.UserApi;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class UserRemoteDataSource_Factory implements Factory<UserRemoteDataSource> {
  private final Provider<UserApi> userApiProvider;

  public UserRemoteDataSource_Factory(Provider<UserApi> userApiProvider) {
    this.userApiProvider = userApiProvider;
  }

  @Override
  public UserRemoteDataSource get() {
    return newInstance(userApiProvider.get());
  }

  public static UserRemoteDataSource_Factory create(Provider<UserApi> userApiProvider) {
    return new UserRemoteDataSource_Factory(userApiProvider);
  }

  public static UserRemoteDataSource newInstance(UserApi userApi) {
    return new UserRemoteDataSource(userApi);
  }
}
