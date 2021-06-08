package org.aston.quizzapp.data;

import dagger.internal.Factory;
import javax.annotation.Generated;
import javax.inject.Provider;
import org.aston.quizzapp.data.network.QuizzApi;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class QuizzRemoteDataSource_Factory implements Factory<QuizzRemoteDataSource> {
  private final Provider<QuizzApi> quizzApiProvider;

  public QuizzRemoteDataSource_Factory(Provider<QuizzApi> quizzApiProvider) {
    this.quizzApiProvider = quizzApiProvider;
  }

  @Override
  public QuizzRemoteDataSource get() {
    return newInstance(quizzApiProvider.get());
  }

  public static QuizzRemoteDataSource_Factory create(Provider<QuizzApi> quizzApiProvider) {
    return new QuizzRemoteDataSource_Factory(quizzApiProvider);
  }

  public static QuizzRemoteDataSource newInstance(QuizzApi quizzApi) {
    return new QuizzRemoteDataSource(quizzApi);
  }
}
