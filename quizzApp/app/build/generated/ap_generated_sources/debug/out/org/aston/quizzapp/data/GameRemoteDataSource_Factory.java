package org.aston.quizzapp.data;

import dagger.internal.Factory;
import javax.annotation.Generated;
import javax.inject.Provider;
import org.aston.quizzapp.data.network.GameApi;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class GameRemoteDataSource_Factory implements Factory<GameRemoteDataSource> {
  private final Provider<GameApi> gameApiProvider;

  public GameRemoteDataSource_Factory(Provider<GameApi> gameApiProvider) {
    this.gameApiProvider = gameApiProvider;
  }

  @Override
  public GameRemoteDataSource get() {
    return newInstance(gameApiProvider.get());
  }

  public static GameRemoteDataSource_Factory create(Provider<GameApi> gameApiProvider) {
    return new GameRemoteDataSource_Factory(gameApiProvider);
  }

  public static GameRemoteDataSource newInstance(GameApi gameApi) {
    return new GameRemoteDataSource(gameApi);
  }
}
