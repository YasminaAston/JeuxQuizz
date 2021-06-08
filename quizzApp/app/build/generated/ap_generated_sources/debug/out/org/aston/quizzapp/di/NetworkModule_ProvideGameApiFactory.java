package org.aston.quizzapp.di;

import dagger.internal.Factory;
import dagger.internal.Preconditions;
import javax.annotation.Generated;
import javax.inject.Provider;
import org.aston.quizzapp.data.network.GameApi;
import retrofit2.Retrofit;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class NetworkModule_ProvideGameApiFactory implements Factory<GameApi> {
  private final Provider<Retrofit> retrofitProvider;

  public NetworkModule_ProvideGameApiFactory(Provider<Retrofit> retrofitProvider) {
    this.retrofitProvider = retrofitProvider;
  }

  @Override
  public GameApi get() {
    return provideGameApi(retrofitProvider.get());
  }

  public static NetworkModule_ProvideGameApiFactory create(Provider<Retrofit> retrofitProvider) {
    return new NetworkModule_ProvideGameApiFactory(retrofitProvider);
  }

  public static GameApi provideGameApi(Retrofit retrofit) {
    return Preconditions.checkNotNull(NetworkModule.provideGameApi(retrofit), "Cannot return null from a non-@Nullable @Provides method");
  }
}
