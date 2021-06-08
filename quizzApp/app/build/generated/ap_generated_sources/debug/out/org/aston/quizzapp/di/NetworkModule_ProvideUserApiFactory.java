package org.aston.quizzapp.di;

import dagger.internal.Factory;
import dagger.internal.Preconditions;
import javax.annotation.Generated;
import javax.inject.Provider;
import org.aston.quizzapp.data.network.UserApi;
import retrofit2.Retrofit;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class NetworkModule_ProvideUserApiFactory implements Factory<UserApi> {
  private final Provider<Retrofit> retrofitProvider;

  public NetworkModule_ProvideUserApiFactory(Provider<Retrofit> retrofitProvider) {
    this.retrofitProvider = retrofitProvider;
  }

  @Override
  public UserApi get() {
    return provideUserApi(retrofitProvider.get());
  }

  public static NetworkModule_ProvideUserApiFactory create(Provider<Retrofit> retrofitProvider) {
    return new NetworkModule_ProvideUserApiFactory(retrofitProvider);
  }

  public static UserApi provideUserApi(Retrofit retrofit) {
    return Preconditions.checkNotNull(NetworkModule.provideUserApi(retrofit), "Cannot return null from a non-@Nullable @Provides method");
  }
}
