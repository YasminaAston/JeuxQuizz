package org.aston.quizzapp.di;

import dagger.internal.Factory;
import dagger.internal.Preconditions;
import javax.annotation.Generated;
import javax.inject.Provider;
import okhttp3.OkHttpClient;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class NetworkModule_ProvideRetrofitInstanceFactory implements Factory<Retrofit> {
  private final Provider<OkHttpClient> okHttpClientProvider;

  private final Provider<GsonConverterFactory> gsonConverterFactoryProvider;

  public NetworkModule_ProvideRetrofitInstanceFactory(Provider<OkHttpClient> okHttpClientProvider,
      Provider<GsonConverterFactory> gsonConverterFactoryProvider) {
    this.okHttpClientProvider = okHttpClientProvider;
    this.gsonConverterFactoryProvider = gsonConverterFactoryProvider;
  }

  @Override
  public Retrofit get() {
    return provideRetrofitInstance(okHttpClientProvider.get(), gsonConverterFactoryProvider.get());
  }

  public static NetworkModule_ProvideRetrofitInstanceFactory create(
      Provider<OkHttpClient> okHttpClientProvider,
      Provider<GsonConverterFactory> gsonConverterFactoryProvider) {
    return new NetworkModule_ProvideRetrofitInstanceFactory(okHttpClientProvider, gsonConverterFactoryProvider);
  }

  public static Retrofit provideRetrofitInstance(OkHttpClient okHttpClient,
      GsonConverterFactory gsonConverterFactory) {
    return Preconditions.checkNotNull(NetworkModule.provideRetrofitInstance(okHttpClient, gsonConverterFactory), "Cannot return null from a non-@Nullable @Provides method");
  }
}
