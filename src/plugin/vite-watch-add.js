import { resolve } from "path";

const phpReloadPlugin = ({ path, extension }) => ({
  name: "vite-watch-add",
  configureServer(devServer) {
    let { watcher, ws } = devServer;
    watcher.add(resolve(path));
    watcher.on("change", function (path) {
      if (path.endsWith(extension)) {
        ws.send({
          type: "full-reload",
        });
      }
    });
  },
});

export default phpReloadPlugin;
