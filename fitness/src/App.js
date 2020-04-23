import React from "react";
import "./Style.css";

function App() {
          return (
                    <div className="App">
                              <header>
                                        <a href="" className="logo">
                                                  <span>fit</span>ness
                                        </a>
                                        <div className="toggle">
                                                  <img
                                                            src={require("./img/toggle.png")}
                                                            alt="toggle"
                                                  />
                                        </div>
                              </header>
                              <div className="banner">
                                        <video
                                                  autoPlay="true"
                                                  loop="true"
                                                  muted="true"
                                        >
                                                  <source
                                                            src={require("./img/bg.mp4")}
                                                            type="video/mp4"
                                                  />
                                        </video>
                                        <div className="textBox">
                                                  <h2>More Than Fitness</h2>
                                                  <p>
                                                            Lorem ipsum, dolor
                                                            sit amet consectetur
                                                            adipisicing elit.
                                                            Dicta laudantium
                                                            est, sequi omnis,
                                                            asperiores tempora
                                                            nesciunt vel quod
                                                            corrupti ea dolores
                                                            itaque ut non
                                                  </p>
                                                  <a href="#">Read more</a>
                                        </div>
                                        <div className="imgBox">
                                                  <img
                                                            src={require("./img/man.png")}
                                                            alt="man"
                                                  />
                                        </div>
                                        <ul className="sci">
                                                  <li>
                                                            <a href="#">
                                                                      <img
                                                                                src={require("./img/facebook.png")}
                                                                                alt="fb"
                                                                      />
                                                            </a>
                                                  </li>
                                                  <li>
                                                            <a href="#">
                                                                      <img
                                                                                src={require("./img/instagram.png")}
                                                                                alt="insta"
                                                                      />
                                                            </a>
                                                  </li>
                                                  <li>
                                                            <a href="#">
                                                                      <img
                                                                                src={require("./img/twitter.png")}
                                                                                alt="twitter"
                                                                      />
                                                            </a>
                                                  </li>
                                        </ul>
                              </div>
                    </div>
          );
}

export default App;
