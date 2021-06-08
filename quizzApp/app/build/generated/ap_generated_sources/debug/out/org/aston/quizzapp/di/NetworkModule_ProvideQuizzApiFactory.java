package org.aston.quizzapp.di;

import dagger.internal.Factory;
import dagger.internal.Preconditions;
import javax.annotation.Generated;
import javax.inject.Provider;
import org.aston.quizzapp.data.network.QuizzApi;
import retrofit2.Retrofit;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class NetworkModule_ProvideQuizzApiFactory implements Factory<QuizzApi> {
  private final Provider<Retrofit> retrofitProvider;

  public NetworkModule_ProvideQuizzApiFactory(Provider<Retrofit> retrofitProvider) {
    this.retrofitProvider = retrofitProvider;
  }

  @Override
  public QuizzApi get() {
    return provideQuizzApi(retrofitProvider.get());
  }

  public static NetworkModule_ProvideQuizzApiFactory create(Provider<Retrofit> retrofitProvider) {
    return new NetworkModule_ProvideQuizzApiFactory(retrofitProvider);
  }

  public static QuizzApi provideQuizzApi(Retrofit retrofit) {
    return Preconditions.checkNotNull(NetworkModule.provideQuizzApi(retrofit), "Cannot return null from a non-@Nullable @Provides method");
  }
}
