package org.aston.quizzapp.di;

import dagger.internal.Factory;
import dagger.internal.Preconditions;
import javax.annotation.Generated;
import retrofit2.converter.gson.GsonConverterFactory;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class NetworkModule_ProvideConverterFactoryFactory implements Factory<GsonConverterFactory> {
  @Override
  public GsonConverterFactory get() {
    return provideConverterFactory();
  }

  public static NetworkModule_ProvideConverterFactoryFactory create() {
    return InstanceHolder.INSTANCE;
  }

  public static GsonConverterFactory provideConverterFactory() {
    return Preconditions.checkNotNull(NetworkModule.provideConverterFactory(), "Cannot return null from a non-@Nullable @Provides method");
  }

  private static final class InstanceHolder {
    private static final NetworkModule_ProvideConverterFactoryFactory INSTANCE = new NetworkModule_ProvideConverterFactoryFactory();
  }
}
