(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
  typeof define === 'function' && define.amd ? define(factory) :
  (global = typeof globalThis !== 'undefined' ? globalThis : global || self, global.HyphaTokensSaleUtil = factory());
})(this, (function () { 'use strict';

  function ownKeys(object, enumerableOnly) {
    var keys = Object.keys(object);

    if (Object.getOwnPropertySymbols) {
      var symbols = Object.getOwnPropertySymbols(object);
      enumerableOnly && (symbols = symbols.filter(function (sym) {
        return Object.getOwnPropertyDescriptor(object, sym).enumerable;
      })), keys.push.apply(keys, symbols);
    }

    return keys;
  }

  function _objectSpread2(target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = null != arguments[i] ? arguments[i] : {};
      i % 2 ? ownKeys(Object(source), !0).forEach(function (key) {
        _defineProperty(target, key, source[key]);
      }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) {
        Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key));
      });
    }

    return target;
  }

  function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) {
    try {
      var info = gen[key](arg);
      var value = info.value;
    } catch (error) {
      reject(error);
      return;
    }

    if (info.done) {
      resolve(value);
    } else {
      Promise.resolve(value).then(_next, _throw);
    }
  }

  function _asyncToGenerator(fn) {
    return function () {
      var self = this,
          args = arguments;
      return new Promise(function (resolve, reject) {
        var gen = fn.apply(self, args);

        function _next(value) {
          asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value);
        }

        function _throw(err) {
          asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err);
        }

        _next(undefined);
      });
    };
  }

  function _classCallCheck$1(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
      throw new TypeError("Cannot call a class as a function");
    }
  }

  function _defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i];
      descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if ("value" in descriptor) descriptor.writable = true;
      Object.defineProperty(target, descriptor.key, descriptor);
    }
  }

  function _createClass$1(Constructor, protoProps, staticProps) {
    if (protoProps) _defineProperties(Constructor.prototype, protoProps);
    if (staticProps) _defineProperties(Constructor, staticProps);
    Object.defineProperty(Constructor, "prototype", {
      writable: false
    });
    return Constructor;
  }

  function _defineProperty(obj, key, value) {
    if (key in obj) {
      Object.defineProperty(obj, key, {
        value: value,
        enumerable: true,
        configurable: true,
        writable: true
      });
    } else {
      obj[key] = value;
    }

    return obj;
  }

  function _slicedToArray$1(arr, i) {
    return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest();
  }

  function _arrayWithHoles(arr) {
    if (Array.isArray(arr)) return arr;
  }

  function _iterableToArrayLimit(arr, i) {
    var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"];

    if (_i == null) return;
    var _arr = [];
    var _n = true;
    var _d = false;

    var _s, _e;

    try {
      for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) {
        _arr.push(_s.value);

        if (i && _arr.length === i) break;
      }
    } catch (err) {
      _d = true;
      _e = err;
    } finally {
      try {
        if (!_n && _i["return"] != null) _i["return"]();
      } finally {
        if (_d) throw _e;
      }
    }

    return _arr;
  }

  function _unsupportedIterableToArray(o, minLen) {
    if (!o) return;
    if (typeof o === "string") return _arrayLikeToArray(o, minLen);
    var n = Object.prototype.toString.call(o).slice(8, -1);
    if (n === "Object" && o.constructor) n = o.constructor.name;
    if (n === "Map" || n === "Set") return Array.from(o);
    if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen);
  }

  function _arrayLikeToArray(arr, len) {
    if (len == null || len > arr.length) len = arr.length;

    for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i];

    return arr2;
  }

  function _nonIterableRest() {
    throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
  }

  var commonjsGlobal = typeof globalThis !== 'undefined' ? globalThis : typeof window !== 'undefined' ? window : typeof global !== 'undefined' ? global : typeof self !== 'undefined' ? self : {};

  var runtime = {exports: {}};

  /**
   * Copyright (c) 2014-present, Facebook, Inc.
   *
   * This source code is licensed under the MIT license found in the
   * LICENSE file in the root directory of this source tree.
   */

  (function (module) {
  var runtime = (function (exports) {

    var Op = Object.prototype;
    var hasOwn = Op.hasOwnProperty;
    var undefined$1; // More compressible than void 0.
    var $Symbol = typeof Symbol === "function" ? Symbol : {};
    var iteratorSymbol = $Symbol.iterator || "@@iterator";
    var asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator";
    var toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag";

    function define(obj, key, value) {
      Object.defineProperty(obj, key, {
        value: value,
        enumerable: true,
        configurable: true,
        writable: true
      });
      return obj[key];
    }
    try {
      // IE 8 has a broken Object.defineProperty that only works on DOM objects.
      define({}, "");
    } catch (err) {
      define = function(obj, key, value) {
        return obj[key] = value;
      };
    }

    function wrap(innerFn, outerFn, self, tryLocsList) {
      // If outerFn provided and outerFn.prototype is a Generator, then outerFn.prototype instanceof Generator.
      var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator;
      var generator = Object.create(protoGenerator.prototype);
      var context = new Context(tryLocsList || []);

      // The ._invoke method unifies the implementations of the .next,
      // .throw, and .return methods.
      generator._invoke = makeInvokeMethod(innerFn, self, context);

      return generator;
    }
    exports.wrap = wrap;

    // Try/catch helper to minimize deoptimizations. Returns a completion
    // record like context.tryEntries[i].completion. This interface could
    // have been (and was previously) designed to take a closure to be
    // invoked without arguments, but in all the cases we care about we
    // already have an existing method we want to call, so there's no need
    // to create a new function object. We can even get away with assuming
    // the method takes exactly one argument, since that happens to be true
    // in every case, so we don't have to touch the arguments object. The
    // only additional allocation required is the completion record, which
    // has a stable shape and so hopefully should be cheap to allocate.
    function tryCatch(fn, obj, arg) {
      try {
        return { type: "normal", arg: fn.call(obj, arg) };
      } catch (err) {
        return { type: "throw", arg: err };
      }
    }

    var GenStateSuspendedStart = "suspendedStart";
    var GenStateSuspendedYield = "suspendedYield";
    var GenStateExecuting = "executing";
    var GenStateCompleted = "completed";

    // Returning this object from the innerFn has the same effect as
    // breaking out of the dispatch switch statement.
    var ContinueSentinel = {};

    // Dummy constructor functions that we use as the .constructor and
    // .constructor.prototype properties for functions that return Generator
    // objects. For full spec compliance, you may wish to configure your
    // minifier not to mangle the names of these two functions.
    function Generator() {}
    function GeneratorFunction() {}
    function GeneratorFunctionPrototype() {}

    // This is a polyfill for %IteratorPrototype% for environments that
    // don't natively support it.
    var IteratorPrototype = {};
    define(IteratorPrototype, iteratorSymbol, function () {
      return this;
    });

    var getProto = Object.getPrototypeOf;
    var NativeIteratorPrototype = getProto && getProto(getProto(values([])));
    if (NativeIteratorPrototype &&
        NativeIteratorPrototype !== Op &&
        hasOwn.call(NativeIteratorPrototype, iteratorSymbol)) {
      // This environment has a native %IteratorPrototype%; use it instead
      // of the polyfill.
      IteratorPrototype = NativeIteratorPrototype;
    }

    var Gp = GeneratorFunctionPrototype.prototype =
      Generator.prototype = Object.create(IteratorPrototype);
    GeneratorFunction.prototype = GeneratorFunctionPrototype;
    define(Gp, "constructor", GeneratorFunctionPrototype);
    define(GeneratorFunctionPrototype, "constructor", GeneratorFunction);
    GeneratorFunction.displayName = define(
      GeneratorFunctionPrototype,
      toStringTagSymbol,
      "GeneratorFunction"
    );

    // Helper for defining the .next, .throw, and .return methods of the
    // Iterator interface in terms of a single ._invoke method.
    function defineIteratorMethods(prototype) {
      ["next", "throw", "return"].forEach(function(method) {
        define(prototype, method, function(arg) {
          return this._invoke(method, arg);
        });
      });
    }

    exports.isGeneratorFunction = function(genFun) {
      var ctor = typeof genFun === "function" && genFun.constructor;
      return ctor
        ? ctor === GeneratorFunction ||
          // For the native GeneratorFunction constructor, the best we can
          // do is to check its .name property.
          (ctor.displayName || ctor.name) === "GeneratorFunction"
        : false;
    };

    exports.mark = function(genFun) {
      if (Object.setPrototypeOf) {
        Object.setPrototypeOf(genFun, GeneratorFunctionPrototype);
      } else {
        genFun.__proto__ = GeneratorFunctionPrototype;
        define(genFun, toStringTagSymbol, "GeneratorFunction");
      }
      genFun.prototype = Object.create(Gp);
      return genFun;
    };

    // Within the body of any async function, `await x` is transformed to
    // `yield regeneratorRuntime.awrap(x)`, so that the runtime can test
    // `hasOwn.call(value, "__await")` to determine if the yielded value is
    // meant to be awaited.
    exports.awrap = function(arg) {
      return { __await: arg };
    };

    function AsyncIterator(generator, PromiseImpl) {
      function invoke(method, arg, resolve, reject) {
        var record = tryCatch(generator[method], generator, arg);
        if (record.type === "throw") {
          reject(record.arg);
        } else {
          var result = record.arg;
          var value = result.value;
          if (value &&
              typeof value === "object" &&
              hasOwn.call(value, "__await")) {
            return PromiseImpl.resolve(value.__await).then(function(value) {
              invoke("next", value, resolve, reject);
            }, function(err) {
              invoke("throw", err, resolve, reject);
            });
          }

          return PromiseImpl.resolve(value).then(function(unwrapped) {
            // When a yielded Promise is resolved, its final value becomes
            // the .value of the Promise<{value,done}> result for the
            // current iteration.
            result.value = unwrapped;
            resolve(result);
          }, function(error) {
            // If a rejected Promise was yielded, throw the rejection back
            // into the async generator function so it can be handled there.
            return invoke("throw", error, resolve, reject);
          });
        }
      }

      var previousPromise;

      function enqueue(method, arg) {
        function callInvokeWithMethodAndArg() {
          return new PromiseImpl(function(resolve, reject) {
            invoke(method, arg, resolve, reject);
          });
        }

        return previousPromise =
          // If enqueue has been called before, then we want to wait until
          // all previous Promises have been resolved before calling invoke,
          // so that results are always delivered in the correct order. If
          // enqueue has not been called before, then it is important to
          // call invoke immediately, without waiting on a callback to fire,
          // so that the async generator function has the opportunity to do
          // any necessary setup in a predictable way. This predictability
          // is why the Promise constructor synchronously invokes its
          // executor callback, and why async functions synchronously
          // execute code before the first await. Since we implement simple
          // async functions in terms of async generators, it is especially
          // important to get this right, even though it requires care.
          previousPromise ? previousPromise.then(
            callInvokeWithMethodAndArg,
            // Avoid propagating failures to Promises returned by later
            // invocations of the iterator.
            callInvokeWithMethodAndArg
          ) : callInvokeWithMethodAndArg();
      }

      // Define the unified helper method that is used to implement .next,
      // .throw, and .return (see defineIteratorMethods).
      this._invoke = enqueue;
    }

    defineIteratorMethods(AsyncIterator.prototype);
    define(AsyncIterator.prototype, asyncIteratorSymbol, function () {
      return this;
    });
    exports.AsyncIterator = AsyncIterator;

    // Note that simple async functions are implemented on top of
    // AsyncIterator objects; they just return a Promise for the value of
    // the final result produced by the iterator.
    exports.async = function(innerFn, outerFn, self, tryLocsList, PromiseImpl) {
      if (PromiseImpl === void 0) PromiseImpl = Promise;

      var iter = new AsyncIterator(
        wrap(innerFn, outerFn, self, tryLocsList),
        PromiseImpl
      );

      return exports.isGeneratorFunction(outerFn)
        ? iter // If outerFn is a generator, return the full iterator.
        : iter.next().then(function(result) {
            return result.done ? result.value : iter.next();
          });
    };

    function makeInvokeMethod(innerFn, self, context) {
      var state = GenStateSuspendedStart;

      return function invoke(method, arg) {
        if (state === GenStateExecuting) {
          throw new Error("Generator is already running");
        }

        if (state === GenStateCompleted) {
          if (method === "throw") {
            throw arg;
          }

          // Be forgiving, per 25.3.3.3.3 of the spec:
          // https://people.mozilla.org/~jorendorff/es6-draft.html#sec-generatorresume
          return doneResult();
        }

        context.method = method;
        context.arg = arg;

        while (true) {
          var delegate = context.delegate;
          if (delegate) {
            var delegateResult = maybeInvokeDelegate(delegate, context);
            if (delegateResult) {
              if (delegateResult === ContinueSentinel) continue;
              return delegateResult;
            }
          }

          if (context.method === "next") {
            // Setting context._sent for legacy support of Babel's
            // function.sent implementation.
            context.sent = context._sent = context.arg;

          } else if (context.method === "throw") {
            if (state === GenStateSuspendedStart) {
              state = GenStateCompleted;
              throw context.arg;
            }

            context.dispatchException(context.arg);

          } else if (context.method === "return") {
            context.abrupt("return", context.arg);
          }

          state = GenStateExecuting;

          var record = tryCatch(innerFn, self, context);
          if (record.type === "normal") {
            // If an exception is thrown from innerFn, we leave state ===
            // GenStateExecuting and loop back for another invocation.
            state = context.done
              ? GenStateCompleted
              : GenStateSuspendedYield;

            if (record.arg === ContinueSentinel) {
              continue;
            }

            return {
              value: record.arg,
              done: context.done
            };

          } else if (record.type === "throw") {
            state = GenStateCompleted;
            // Dispatch the exception by looping back around to the
            // context.dispatchException(context.arg) call above.
            context.method = "throw";
            context.arg = record.arg;
          }
        }
      };
    }

    // Call delegate.iterator[context.method](context.arg) and handle the
    // result, either by returning a { value, done } result from the
    // delegate iterator, or by modifying context.method and context.arg,
    // setting context.delegate to null, and returning the ContinueSentinel.
    function maybeInvokeDelegate(delegate, context) {
      var method = delegate.iterator[context.method];
      if (method === undefined$1) {
        // A .throw or .return when the delegate iterator has no .throw
        // method always terminates the yield* loop.
        context.delegate = null;

        if (context.method === "throw") {
          // Note: ["return"] must be used for ES3 parsing compatibility.
          if (delegate.iterator["return"]) {
            // If the delegate iterator has a return method, give it a
            // chance to clean up.
            context.method = "return";
            context.arg = undefined$1;
            maybeInvokeDelegate(delegate, context);

            if (context.method === "throw") {
              // If maybeInvokeDelegate(context) changed context.method from
              // "return" to "throw", let that override the TypeError below.
              return ContinueSentinel;
            }
          }

          context.method = "throw";
          context.arg = new TypeError(
            "The iterator does not provide a 'throw' method");
        }

        return ContinueSentinel;
      }

      var record = tryCatch(method, delegate.iterator, context.arg);

      if (record.type === "throw") {
        context.method = "throw";
        context.arg = record.arg;
        context.delegate = null;
        return ContinueSentinel;
      }

      var info = record.arg;

      if (! info) {
        context.method = "throw";
        context.arg = new TypeError("iterator result is not an object");
        context.delegate = null;
        return ContinueSentinel;
      }

      if (info.done) {
        // Assign the result of the finished delegate to the temporary
        // variable specified by delegate.resultName (see delegateYield).
        context[delegate.resultName] = info.value;

        // Resume execution at the desired location (see delegateYield).
        context.next = delegate.nextLoc;

        // If context.method was "throw" but the delegate handled the
        // exception, let the outer generator proceed normally. If
        // context.method was "next", forget context.arg since it has been
        // "consumed" by the delegate iterator. If context.method was
        // "return", allow the original .return call to continue in the
        // outer generator.
        if (context.method !== "return") {
          context.method = "next";
          context.arg = undefined$1;
        }

      } else {
        // Re-yield the result returned by the delegate method.
        return info;
      }

      // The delegate iterator is finished, so forget it and continue with
      // the outer generator.
      context.delegate = null;
      return ContinueSentinel;
    }

    // Define Generator.prototype.{next,throw,return} in terms of the
    // unified ._invoke helper method.
    defineIteratorMethods(Gp);

    define(Gp, toStringTagSymbol, "Generator");

    // A Generator should always return itself as the iterator object when the
    // @@iterator function is called on it. Some browsers' implementations of the
    // iterator prototype chain incorrectly implement this, causing the Generator
    // object to not be returned from this call. This ensures that doesn't happen.
    // See https://github.com/facebook/regenerator/issues/274 for more details.
    define(Gp, iteratorSymbol, function() {
      return this;
    });

    define(Gp, "toString", function() {
      return "[object Generator]";
    });

    function pushTryEntry(locs) {
      var entry = { tryLoc: locs[0] };

      if (1 in locs) {
        entry.catchLoc = locs[1];
      }

      if (2 in locs) {
        entry.finallyLoc = locs[2];
        entry.afterLoc = locs[3];
      }

      this.tryEntries.push(entry);
    }

    function resetTryEntry(entry) {
      var record = entry.completion || {};
      record.type = "normal";
      delete record.arg;
      entry.completion = record;
    }

    function Context(tryLocsList) {
      // The root entry object (effectively a try statement without a catch
      // or a finally block) gives us a place to store values thrown from
      // locations where there is no enclosing try statement.
      this.tryEntries = [{ tryLoc: "root" }];
      tryLocsList.forEach(pushTryEntry, this);
      this.reset(true);
    }

    exports.keys = function(object) {
      var keys = [];
      for (var key in object) {
        keys.push(key);
      }
      keys.reverse();

      // Rather than returning an object with a next method, we keep
      // things simple and return the next function itself.
      return function next() {
        while (keys.length) {
          var key = keys.pop();
          if (key in object) {
            next.value = key;
            next.done = false;
            return next;
          }
        }

        // To avoid creating an additional object, we just hang the .value
        // and .done properties off the next function object itself. This
        // also ensures that the minifier will not anonymize the function.
        next.done = true;
        return next;
      };
    };

    function values(iterable) {
      if (iterable) {
        var iteratorMethod = iterable[iteratorSymbol];
        if (iteratorMethod) {
          return iteratorMethod.call(iterable);
        }

        if (typeof iterable.next === "function") {
          return iterable;
        }

        if (!isNaN(iterable.length)) {
          var i = -1, next = function next() {
            while (++i < iterable.length) {
              if (hasOwn.call(iterable, i)) {
                next.value = iterable[i];
                next.done = false;
                return next;
              }
            }

            next.value = undefined$1;
            next.done = true;

            return next;
          };

          return next.next = next;
        }
      }

      // Return an iterator with no values.
      return { next: doneResult };
    }
    exports.values = values;

    function doneResult() {
      return { value: undefined$1, done: true };
    }

    Context.prototype = {
      constructor: Context,

      reset: function(skipTempReset) {
        this.prev = 0;
        this.next = 0;
        // Resetting context._sent for legacy support of Babel's
        // function.sent implementation.
        this.sent = this._sent = undefined$1;
        this.done = false;
        this.delegate = null;

        this.method = "next";
        this.arg = undefined$1;

        this.tryEntries.forEach(resetTryEntry);

        if (!skipTempReset) {
          for (var name in this) {
            // Not sure about the optimal order of these conditions:
            if (name.charAt(0) === "t" &&
                hasOwn.call(this, name) &&
                !isNaN(+name.slice(1))) {
              this[name] = undefined$1;
            }
          }
        }
      },

      stop: function() {
        this.done = true;

        var rootEntry = this.tryEntries[0];
        var rootRecord = rootEntry.completion;
        if (rootRecord.type === "throw") {
          throw rootRecord.arg;
        }

        return this.rval;
      },

      dispatchException: function(exception) {
        if (this.done) {
          throw exception;
        }

        var context = this;
        function handle(loc, caught) {
          record.type = "throw";
          record.arg = exception;
          context.next = loc;

          if (caught) {
            // If the dispatched exception was caught by a catch block,
            // then let that catch block handle the exception normally.
            context.method = "next";
            context.arg = undefined$1;
          }

          return !! caught;
        }

        for (var i = this.tryEntries.length - 1; i >= 0; --i) {
          var entry = this.tryEntries[i];
          var record = entry.completion;

          if (entry.tryLoc === "root") {
            // Exception thrown outside of any try block that could handle
            // it, so set the completion value of the entire function to
            // throw the exception.
            return handle("end");
          }

          if (entry.tryLoc <= this.prev) {
            var hasCatch = hasOwn.call(entry, "catchLoc");
            var hasFinally = hasOwn.call(entry, "finallyLoc");

            if (hasCatch && hasFinally) {
              if (this.prev < entry.catchLoc) {
                return handle(entry.catchLoc, true);
              } else if (this.prev < entry.finallyLoc) {
                return handle(entry.finallyLoc);
              }

            } else if (hasCatch) {
              if (this.prev < entry.catchLoc) {
                return handle(entry.catchLoc, true);
              }

            } else if (hasFinally) {
              if (this.prev < entry.finallyLoc) {
                return handle(entry.finallyLoc);
              }

            } else {
              throw new Error("try statement without catch or finally");
            }
          }
        }
      },

      abrupt: function(type, arg) {
        for (var i = this.tryEntries.length - 1; i >= 0; --i) {
          var entry = this.tryEntries[i];
          if (entry.tryLoc <= this.prev &&
              hasOwn.call(entry, "finallyLoc") &&
              this.prev < entry.finallyLoc) {
            var finallyEntry = entry;
            break;
          }
        }

        if (finallyEntry &&
            (type === "break" ||
             type === "continue") &&
            finallyEntry.tryLoc <= arg &&
            arg <= finallyEntry.finallyLoc) {
          // Ignore the finally entry if control is not jumping to a
          // location outside the try/catch block.
          finallyEntry = null;
        }

        var record = finallyEntry ? finallyEntry.completion : {};
        record.type = type;
        record.arg = arg;

        if (finallyEntry) {
          this.method = "next";
          this.next = finallyEntry.finallyLoc;
          return ContinueSentinel;
        }

        return this.complete(record);
      },

      complete: function(record, afterLoc) {
        if (record.type === "throw") {
          throw record.arg;
        }

        if (record.type === "break" ||
            record.type === "continue") {
          this.next = record.arg;
        } else if (record.type === "return") {
          this.rval = this.arg = record.arg;
          this.method = "return";
          this.next = "end";
        } else if (record.type === "normal" && afterLoc) {
          this.next = afterLoc;
        }

        return ContinueSentinel;
      },

      finish: function(finallyLoc) {
        for (var i = this.tryEntries.length - 1; i >= 0; --i) {
          var entry = this.tryEntries[i];
          if (entry.finallyLoc === finallyLoc) {
            this.complete(entry.completion, entry.afterLoc);
            resetTryEntry(entry);
            return ContinueSentinel;
          }
        }
      },

      "catch": function(tryLoc) {
        for (var i = this.tryEntries.length - 1; i >= 0; --i) {
          var entry = this.tryEntries[i];
          if (entry.tryLoc === tryLoc) {
            var record = entry.completion;
            if (record.type === "throw") {
              var thrown = record.arg;
              resetTryEntry(entry);
            }
            return thrown;
          }
        }

        // The context.catch method must only be called with a location
        // argument that corresponds to a known catch block.
        throw new Error("illegal catch attempt");
      },

      delegateYield: function(iterable, resultName, nextLoc) {
        this.delegate = {
          iterator: values(iterable),
          resultName: resultName,
          nextLoc: nextLoc
        };

        if (this.method === "next") {
          // Deliberately forget the last sent value so that we don't
          // accidentally pass it on to the delegate.
          this.arg = undefined$1;
        }

        return ContinueSentinel;
      }
    };

    // Regardless of whether this script is executing as a CommonJS module
    // or not, return the runtime object so that we can declare the variable
    // regeneratorRuntime in the outer scope, which allows this module to be
    // injected easily by `bin/regenerator --include-runtime script.js`.
    return exports;

  }(
    // If this script is executing as a CommonJS module, use module.exports
    // as the regeneratorRuntime namespace. Otherwise create a new empty
    // object. Either way, the resulting object will be used to initialize
    // the regeneratorRuntime variable at the top of this file.
    module.exports
  ));

  try {
    regeneratorRuntime = runtime;
  } catch (accidentalStrictMode) {
    // This module should not be running in strict mode, so the above
    // assignment should always work unless something is misconfigured. Just
    // in case runtime.js accidentally runs in strict mode, in modern engines
    // we can explicitly access globalThis. In older engines we can escape
    // strict mode using a global Function call. This could conceivably fail
    // if a Content Security Policy forbids using Function, but in that case
    // the proper solution is to fix the accidental strict mode problem. If
    // you've misconfigured your bundler to force strict mode and applied a
    // CSP to forbid Function, and you're not willing to fix either of those
    // problems, please detail your unique predicament in a GitHub issue.
    if (typeof globalThis === "object") {
      globalThis.regeneratorRuntime = runtime;
    } else {
      Function("r", "regeneratorRuntime = r")(runtime);
    }
  }
  }(runtime));

  var SATOSHI_PER_BTC = 100000000;
  var CENTS_PER_USD = 100;

  var TokenSale = /*#__PURE__*/function () {
    function TokenSale(callApi) {
      _classCallCheck$1(this, TokenSale);

      this.callApi = callApi.bind(this);
    }

    _createClass$1(TokenSale, [{
      key: "findMemberAddress",
      value: function () {
        var _findMemberAddress = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee(accountName) {
          var endpoint, address;
          return regeneratorRuntime.wrap(function _callee$(_context) {
            while (1) {
              switch (_context.prev = _context.next) {
                case 0:
                  endpoint = `findMemberAddress/${accountName}`;
                  address = this.callApi(endpoint);
                  return _context.abrupt("return", address);

                case 3:
                case "end":
                  return _context.stop();
              }
            }
          }, _callee, this);
        }));

        function findMemberAddress(_x) {
          return _findMemberAddress.apply(this, arguments);
        }

        return findMemberAddress;
      }()
    }, {
      key: "usdToBtc",
      value: function () {
        var _usdToBtc = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee2(usd) {
          var cents, endpoint, _yield$this$callApi, satoshiAmount, btc;

          return regeneratorRuntime.wrap(function _callee2$(_context2) {
            while (1) {
              switch (_context2.prev = _context2.next) {
                case 0:
                  cents = usd * CENTS_PER_USD;
                  endpoint = `centsToSatoshi/${cents}`;
                  _context2.next = 4;
                  return this.callApi(endpoint);

                case 4:
                  _yield$this$callApi = _context2.sent;
                  satoshiAmount = _yield$this$callApi.satoshiAmount;
                  btc = satoshiAmount / SATOSHI_PER_BTC;
                  return _context2.abrupt("return", btc);

                case 8:
                case "end":
                  return _context2.stop();
              }
            }
          }, _callee2, this);
        }));

        function usdToBtc(_x2) {
          return _usdToBtc.apply(this, arguments);
        }

        return usdToBtc;
      }()
    }, {
      key: "usdToEos",
      value: function () {
        var _usdToEos = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee3(usd) {
          var endpoint, response, eosValue;
          return regeneratorRuntime.wrap(function _callee3$(_context3) {
            while (1) {
              switch (_context3.prev = _context3.next) {
                case 0:
                  endpoint = `usdToEos/${usd}`;
                  _context3.next = 3;
                  return this.callApi(endpoint);

                case 3:
                  response = _context3.sent;
                  eosValue = response.eosValue;
                  return _context3.abrupt("return", eosValue);

                case 6:
                case "end":
                  return _context3.stop();
              }
            }
          }, _callee3, this);
        }));

        function usdToEos(_x3) {
          return _usdToEos.apply(this, arguments);
        }

        return usdToEos;
      }()
    }]);

    return TokenSale;
  }();

  var _global = {exports: {}};

  // https://github.com/zloirock/core-js/issues/86#issuecomment-115759028
  var global$4 = _global.exports = typeof window != 'undefined' && window.Math == Math
    ? window : typeof self != 'undefined' && self.Math == Math ? self
    // eslint-disable-next-line no-new-func
    : Function('return this')();
  if (typeof __g == 'number') __g = global$4; // eslint-disable-line no-undef

  var _core = {exports: {}};

  var core$2 = _core.exports = { version: '2.6.12' };
  if (typeof __e == 'number') __e = core$2; // eslint-disable-line no-undef

  var _objectDp = {};

  var _isObject = function (it) {
    return typeof it === 'object' ? it !== null : typeof it === 'function';
  };

  var isObject$3 = _isObject;
  var _anObject = function (it) {
    if (!isObject$3(it)) throw TypeError(it + ' is not an object!');
    return it;
  };

  var _fails = function (exec) {
    try {
      return !!exec();
    } catch (e) {
      return true;
    }
  };

  // Thank's IE8 for his funny defineProperty
  var _descriptors = !_fails(function () {
    return Object.defineProperty({}, 'a', { get: function () { return 7; } }).a != 7;
  });

  var isObject$2 = _isObject;
  var document = _global.exports.document;
  // typeof document.createElement is 'object' in old IE
  var is = isObject$2(document) && isObject$2(document.createElement);
  var _domCreate = function (it) {
    return is ? document.createElement(it) : {};
  };

  var _ie8DomDefine = !_descriptors && !_fails(function () {
    return Object.defineProperty(_domCreate('div'), 'a', { get: function () { return 7; } }).a != 7;
  });

  // 7.1.1 ToPrimitive(input [, PreferredType])
  var isObject$1 = _isObject;
  // instead of the ES6 spec version, we didn't implement @@toPrimitive case
  // and the second argument - flag - preferred type is a string
  var _toPrimitive = function (it, S) {
    if (!isObject$1(it)) return it;
    var fn, val;
    if (S && typeof (fn = it.toString) == 'function' && !isObject$1(val = fn.call(it))) return val;
    if (typeof (fn = it.valueOf) == 'function' && !isObject$1(val = fn.call(it))) return val;
    if (!S && typeof (fn = it.toString) == 'function' && !isObject$1(val = fn.call(it))) return val;
    throw TypeError("Can't convert object to primitive value");
  };

  var anObject$2 = _anObject;
  var IE8_DOM_DEFINE = _ie8DomDefine;
  var toPrimitive = _toPrimitive;
  var dP$1 = Object.defineProperty;

  _objectDp.f = _descriptors ? Object.defineProperty : function defineProperty(O, P, Attributes) {
    anObject$2(O);
    P = toPrimitive(P, true);
    anObject$2(Attributes);
    if (IE8_DOM_DEFINE) try {
      return dP$1(O, P, Attributes);
    } catch (e) { /* empty */ }
    if ('get' in Attributes || 'set' in Attributes) throw TypeError('Accessors not supported!');
    if ('value' in Attributes) O[P] = Attributes.value;
    return O;
  };

  var _propertyDesc = function (bitmap, value) {
    return {
      enumerable: !(bitmap & 1),
      configurable: !(bitmap & 2),
      writable: !(bitmap & 4),
      value: value
    };
  };

  var dP = _objectDp;
  var createDesc = _propertyDesc;
  var _hide = _descriptors ? function (object, key, value) {
    return dP.f(object, key, createDesc(1, value));
  } : function (object, key, value) {
    object[key] = value;
    return object;
  };

  var _redefine = {exports: {}};

  var hasOwnProperty = {}.hasOwnProperty;
  var _has = function (it, key) {
    return hasOwnProperty.call(it, key);
  };

  var id = 0;
  var px = Math.random();
  var _uid = function (key) {
    return 'Symbol('.concat(key === undefined ? '' : key, ')_', (++id + px).toString(36));
  };

  var _shared = {exports: {}};

  var core$1 = _core.exports;
  var global$3 = _global.exports;
  var SHARED = '__core-js_shared__';
  var store$1 = global$3[SHARED] || (global$3[SHARED] = {});

  (_shared.exports = function (key, value) {
    return store$1[key] || (store$1[key] = value !== undefined ? value : {});
  })('versions', []).push({
    version: core$1.version,
    mode: 'global',
    copyright: '© 2020 Denis Pushkarev (zloirock.ru)'
  });

  var _functionToString = _shared.exports('native-function-to-string', Function.toString);

  var global$2 = _global.exports;
  var hide$2 = _hide;
  var has$1 = _has;
  var SRC = _uid('src');
  var $toString = _functionToString;
  var TO_STRING = 'toString';
  var TPL = ('' + $toString).split(TO_STRING);

  _core.exports.inspectSource = function (it) {
    return $toString.call(it);
  };

  (_redefine.exports = function (O, key, val, safe) {
    var isFunction = typeof val == 'function';
    if (isFunction) has$1(val, 'name') || hide$2(val, 'name', key);
    if (O[key] === val) return;
    if (isFunction) has$1(val, SRC) || hide$2(val, SRC, O[key] ? '' + O[key] : TPL.join(String(key)));
    if (O === global$2) {
      O[key] = val;
    } else if (!safe) {
      delete O[key];
      hide$2(O, key, val);
    } else if (O[key]) {
      O[key] = val;
    } else {
      hide$2(O, key, val);
    }
  // add fake Function#toString for correct work wrapped methods / constructors with methods like LoDash isNative
  })(Function.prototype, TO_STRING, function toString() {
    return typeof this == 'function' && this[SRC] || $toString.call(this);
  });

  var _aFunction = function (it) {
    if (typeof it != 'function') throw TypeError(it + ' is not a function!');
    return it;
  };

  // optional / simple context binding
  var aFunction = _aFunction;
  var _ctx = function (fn, that, length) {
    aFunction(fn);
    if (that === undefined) return fn;
    switch (length) {
      case 1: return function (a) {
        return fn.call(that, a);
      };
      case 2: return function (a, b) {
        return fn.call(that, a, b);
      };
      case 3: return function (a, b, c) {
        return fn.call(that, a, b, c);
      };
    }
    return function (/* ...args */) {
      return fn.apply(that, arguments);
    };
  };

  var global$1 = _global.exports;
  var core = _core.exports;
  var hide$1 = _hide;
  var redefine$1 = _redefine.exports;
  var ctx$1 = _ctx;
  var PROTOTYPE = 'prototype';

  var $export$2 = function (type, name, source) {
    var IS_FORCED = type & $export$2.F;
    var IS_GLOBAL = type & $export$2.G;
    var IS_STATIC = type & $export$2.S;
    var IS_PROTO = type & $export$2.P;
    var IS_BIND = type & $export$2.B;
    var target = IS_GLOBAL ? global$1 : IS_STATIC ? global$1[name] || (global$1[name] = {}) : (global$1[name] || {})[PROTOTYPE];
    var exports = IS_GLOBAL ? core : core[name] || (core[name] = {});
    var expProto = exports[PROTOTYPE] || (exports[PROTOTYPE] = {});
    var key, own, out, exp;
    if (IS_GLOBAL) source = name;
    for (key in source) {
      // contains in native
      own = !IS_FORCED && target && target[key] !== undefined;
      // export native or passed
      out = (own ? target : source)[key];
      // bind timers to global for call from export context
      exp = IS_BIND && own ? ctx$1(out, global$1) : IS_PROTO && typeof out == 'function' ? ctx$1(Function.call, out) : out;
      // extend global
      if (target) redefine$1(target, key, out, type & $export$2.U);
      // export
      if (exports[key] != out) hide$1(exports, key, exp);
      if (IS_PROTO && expProto[key] != out) expProto[key] = out;
    }
  };
  global$1.core = core;
  // type bitmap
  $export$2.F = 1;   // forced
  $export$2.G = 2;   // global
  $export$2.S = 4;   // static
  $export$2.P = 8;   // proto
  $export$2.B = 16;  // bind
  $export$2.W = 32;  // wrap
  $export$2.U = 64;  // safe
  $export$2.R = 128; // real proto method for `library`
  var _export = $export$2;

  var toString = {}.toString;

  var _cof = function (it) {
    return toString.call(it).slice(8, -1);
  };

  // fallback for non-array-like ES3 and non-enumerable old V8 strings
  var cof$2 = _cof;
  // eslint-disable-next-line no-prototype-builtins
  var _iobject = Object('z').propertyIsEnumerable(0) ? Object : function (it) {
    return cof$2(it) == 'String' ? it.split('') : Object(it);
  };

  // 7.2.1 RequireObjectCoercible(argument)
  var _defined = function (it) {
    if (it == undefined) throw TypeError("Can't call method on  " + it);
    return it;
  };

  // 7.1.13 ToObject(argument)
  var defined$3 = _defined;
  var _toObject = function (it) {
    return Object(defined$3(it));
  };

  // 7.1.4 ToInteger
  var ceil = Math.ceil;
  var floor$1 = Math.floor;
  var _toInteger = function (it) {
    return isNaN(it = +it) ? 0 : (it > 0 ? floor$1 : ceil)(it);
  };

  // 7.1.15 ToLength
  var toInteger$3 = _toInteger;
  var min$2 = Math.min;
  var _toLength = function (it) {
    return it > 0 ? min$2(toInteger$3(it), 0x1fffffffffffff) : 0; // pow(2, 53) - 1 == 9007199254740991
  };

  // 7.2.2 IsArray(argument)
  var cof$1 = _cof;
  var _isArray = Array.isArray || function isArray(arg) {
    return cof$1(arg) == 'Array';
  };

  var _wks = {exports: {}};

  var store = _shared.exports('wks');
  var uid$1 = _uid;
  var Symbol$1 = _global.exports.Symbol;
  var USE_SYMBOL = typeof Symbol$1 == 'function';

  var $exports = _wks.exports = function (name) {
    return store[name] || (store[name] =
      USE_SYMBOL && Symbol$1[name] || (USE_SYMBOL ? Symbol$1 : uid$1)('Symbol.' + name));
  };

  $exports.store = store;

  var isObject = _isObject;
  var isArray = _isArray;
  var SPECIES$1 = _wks.exports('species');

  var _arraySpeciesConstructor = function (original) {
    var C;
    if (isArray(original)) {
      C = original.constructor;
      // cross-realm fallback
      if (typeof C == 'function' && (C === Array || isArray(C.prototype))) C = undefined;
      if (isObject(C)) {
        C = C[SPECIES$1];
        if (C === null) C = undefined;
      }
    } return C === undefined ? Array : C;
  };

  // 9.4.2.3 ArraySpeciesCreate(originalArray, length)
  var speciesConstructor = _arraySpeciesConstructor;

  var _arraySpeciesCreate = function (original, length) {
    return new (speciesConstructor(original))(length);
  };

  // 0 -> Array#forEach
  // 1 -> Array#map
  // 2 -> Array#filter
  // 3 -> Array#some
  // 4 -> Array#every
  // 5 -> Array#find
  // 6 -> Array#findIndex
  var ctx = _ctx;
  var IObject$2 = _iobject;
  var toObject$2 = _toObject;
  var toLength$2 = _toLength;
  var asc = _arraySpeciesCreate;
  var _arrayMethods = function (TYPE, $create) {
    var IS_MAP = TYPE == 1;
    var IS_FILTER = TYPE == 2;
    var IS_SOME = TYPE == 3;
    var IS_EVERY = TYPE == 4;
    var IS_FIND_INDEX = TYPE == 6;
    var NO_HOLES = TYPE == 5 || IS_FIND_INDEX;
    var create = $create || asc;
    return function ($this, callbackfn, that) {
      var O = toObject$2($this);
      var self = IObject$2(O);
      var f = ctx(callbackfn, that, 3);
      var length = toLength$2(self.length);
      var index = 0;
      var result = IS_MAP ? create($this, length) : IS_FILTER ? create($this, 0) : undefined;
      var val, res;
      for (;length > index; index++) if (NO_HOLES || index in self) {
        val = self[index];
        res = f(val, index, O);
        if (TYPE) {
          if (IS_MAP) result[index] = res;   // map
          else if (res) switch (TYPE) {
            case 3: return true;             // some
            case 5: return val;              // find
            case 6: return index;            // findIndex
            case 2: result.push(val);        // filter
          } else if (IS_EVERY) return false; // every
        }
      }
      return IS_FIND_INDEX ? -1 : IS_SOME || IS_EVERY ? IS_EVERY : result;
    };
  };

  var fails$1 = _fails;

  var _strictMethod = function (method, arg) {
    return !!method && fails$1(function () {
      // eslint-disable-next-line no-useless-call
      arg ? method.call(null, function () { /* empty */ }, 1) : method.call(null);
    });
  };

  var $export$1 = _export;
  var $map = _arrayMethods(1);

  $export$1($export$1.P + $export$1.F * !_strictMethod([].map, true), 'Array', {
    // 22.1.3.15 / 15.4.4.19 Array.prototype.map(callbackfn [, thisArg])
    map: function map(callbackfn /* , thisArg */) {
      return $map(this, callbackfn, arguments[1]);
    }
  });

  var toInteger$2 = _toInteger;
  var defined$2 = _defined;
  // true  -> String#at
  // false -> String#codePointAt
  var _stringAt = function (TO_STRING) {
    return function (that, pos) {
      var s = String(defined$2(that));
      var i = toInteger$2(pos);
      var l = s.length;
      var a, b;
      if (i < 0 || i >= l) return TO_STRING ? '' : undefined;
      a = s.charCodeAt(i);
      return a < 0xd800 || a > 0xdbff || i + 1 === l || (b = s.charCodeAt(i + 1)) < 0xdc00 || b > 0xdfff
        ? TO_STRING ? s.charAt(i) : a
        : TO_STRING ? s.slice(i, i + 2) : (a - 0xd800 << 10) + (b - 0xdc00) + 0x10000;
    };
  };

  var at = _stringAt(true);

   // `AdvanceStringIndex` abstract operation
  // https://tc39.github.io/ecma262/#sec-advancestringindex
  var _advanceStringIndex = function (S, index, unicode) {
    return index + (unicode ? at(S, index).length : 1);
  };

  // getting tag from 19.1.3.6 Object.prototype.toString()
  var cof = _cof;
  var TAG = _wks.exports('toStringTag');
  // ES3 wrong here
  var ARG = cof(function () { return arguments; }()) == 'Arguments';

  // fallback for IE11 Script Access Denied error
  var tryGet = function (it, key) {
    try {
      return it[key];
    } catch (e) { /* empty */ }
  };

  var _classof = function (it) {
    var O, T, B;
    return it === undefined ? 'Undefined' : it === null ? 'Null'
      // @@toStringTag case
      : typeof (T = tryGet(O = Object(it), TAG)) == 'string' ? T
      // builtinTag case
      : ARG ? cof(O)
      // ES3 arguments fallback
      : (B = cof(O)) == 'Object' && typeof O.callee == 'function' ? 'Arguments' : B;
  };

  var classof = _classof;
  var builtinExec = RegExp.prototype.exec;

   // `RegExpExec` abstract operation
  // https://tc39.github.io/ecma262/#sec-regexpexec
  var _regexpExecAbstract = function (R, S) {
    var exec = R.exec;
    if (typeof exec === 'function') {
      var result = exec.call(R, S);
      if (typeof result !== 'object') {
        throw new TypeError('RegExp exec method returned something other than an Object or null');
      }
      return result;
    }
    if (classof(R) !== 'RegExp') {
      throw new TypeError('RegExp#exec called on incompatible receiver');
    }
    return builtinExec.call(R, S);
  };

  // 21.2.5.3 get RegExp.prototype.flags
  var anObject$1 = _anObject;
  var _flags = function () {
    var that = anObject$1(this);
    var result = '';
    if (that.global) result += 'g';
    if (that.ignoreCase) result += 'i';
    if (that.multiline) result += 'm';
    if (that.unicode) result += 'u';
    if (that.sticky) result += 'y';
    return result;
  };

  var regexpFlags = _flags;

  var nativeExec = RegExp.prototype.exec;
  // This always refers to the native implementation, because the
  // String#replace polyfill uses ./fix-regexp-well-known-symbol-logic.js,
  // which loads this file before patching the method.
  var nativeReplace = String.prototype.replace;

  var patchedExec = nativeExec;

  var LAST_INDEX = 'lastIndex';

  var UPDATES_LAST_INDEX_WRONG = (function () {
    var re1 = /a/,
        re2 = /b*/g;
    nativeExec.call(re1, 'a');
    nativeExec.call(re2, 'a');
    return re1[LAST_INDEX] !== 0 || re2[LAST_INDEX] !== 0;
  })();

  // nonparticipating capturing group, copied from es5-shim's String#split patch.
  var NPCG_INCLUDED = /()??/.exec('')[1] !== undefined;

  var PATCH = UPDATES_LAST_INDEX_WRONG || NPCG_INCLUDED;

  if (PATCH) {
    patchedExec = function exec(str) {
      var re = this;
      var lastIndex, reCopy, match, i;

      if (NPCG_INCLUDED) {
        reCopy = new RegExp('^' + re.source + '$(?!\\s)', regexpFlags.call(re));
      }
      if (UPDATES_LAST_INDEX_WRONG) lastIndex = re[LAST_INDEX];

      match = nativeExec.call(re, str);

      if (UPDATES_LAST_INDEX_WRONG && match) {
        re[LAST_INDEX] = re.global ? match.index + match[0].length : lastIndex;
      }
      if (NPCG_INCLUDED && match && match.length > 1) {
        // Fix browsers whose `exec` methods don't consistently return `undefined`
        // for NPCG, like IE8. NOTE: This doesn' work for /(.?)?/
        // eslint-disable-next-line no-loop-func
        nativeReplace.call(match[0], reCopy, function () {
          for (i = 1; i < arguments.length - 2; i++) {
            if (arguments[i] === undefined) match[i] = undefined;
          }
        });
      }

      return match;
    };
  }

  var _regexpExec = patchedExec;

  var regexpExec$1 = _regexpExec;
  _export({
    target: 'RegExp',
    proto: true,
    forced: regexpExec$1 !== /./.exec
  }, {
    exec: regexpExec$1
  });

  var redefine = _redefine.exports;
  var hide = _hide;
  var fails = _fails;
  var defined$1 = _defined;
  var wks = _wks.exports;
  var regexpExec = _regexpExec;

  var SPECIES = wks('species');

  var REPLACE_SUPPORTS_NAMED_GROUPS = !fails(function () {
    // #replace needs built-in support for named groups.
    // #match works fine because it just return the exec results, even if it has
    // a "grops" property.
    var re = /./;
    re.exec = function () {
      var result = [];
      result.groups = { a: '7' };
      return result;
    };
    return ''.replace(re, '$<a>') !== '7';
  });

  var SPLIT_WORKS_WITH_OVERWRITTEN_EXEC = (function () {
    // Chrome 51 has a buggy "split" implementation when RegExp#exec !== nativeExec
    var re = /(?:)/;
    var originalExec = re.exec;
    re.exec = function () { return originalExec.apply(this, arguments); };
    var result = 'ab'.split(re);
    return result.length === 2 && result[0] === 'a' && result[1] === 'b';
  })();

  var _fixReWks = function (KEY, length, exec) {
    var SYMBOL = wks(KEY);

    var DELEGATES_TO_SYMBOL = !fails(function () {
      // String methods call symbol-named RegEp methods
      var O = {};
      O[SYMBOL] = function () { return 7; };
      return ''[KEY](O) != 7;
    });

    var DELEGATES_TO_EXEC = DELEGATES_TO_SYMBOL ? !fails(function () {
      // Symbol-named RegExp methods call .exec
      var execCalled = false;
      var re = /a/;
      re.exec = function () { execCalled = true; return null; };
      if (KEY === 'split') {
        // RegExp[@@split] doesn't call the regex's exec method, but first creates
        // a new one. We need to return the patched regex when creating the new one.
        re.constructor = {};
        re.constructor[SPECIES] = function () { return re; };
      }
      re[SYMBOL]('');
      return !execCalled;
    }) : undefined;

    if (
      !DELEGATES_TO_SYMBOL ||
      !DELEGATES_TO_EXEC ||
      (KEY === 'replace' && !REPLACE_SUPPORTS_NAMED_GROUPS) ||
      (KEY === 'split' && !SPLIT_WORKS_WITH_OVERWRITTEN_EXEC)
    ) {
      var nativeRegExpMethod = /./[SYMBOL];
      var fns = exec(
        defined$1,
        SYMBOL,
        ''[KEY],
        function maybeCallNative(nativeMethod, regexp, str, arg2, forceStringMethod) {
          if (regexp.exec === regexpExec) {
            if (DELEGATES_TO_SYMBOL && !forceStringMethod) {
              // The native String method already delegates to @@method (this
              // polyfilled function), leasing to infinite recursion.
              // We avoid it by directly calling the native @@method method.
              return { done: true, value: nativeRegExpMethod.call(regexp, str, arg2) };
            }
            return { done: true, value: nativeMethod.call(str, regexp, arg2) };
          }
          return { done: false };
        }
      );
      var strfn = fns[0];
      var rxfn = fns[1];

      redefine(String.prototype, KEY, strfn);
      hide(RegExp.prototype, SYMBOL, length == 2
        // 21.2.5.8 RegExp.prototype[@@replace](string, replaceValue)
        // 21.2.5.11 RegExp.prototype[@@split](string, limit)
        ? function (string, arg) { return rxfn.call(string, this, arg); }
        // 21.2.5.6 RegExp.prototype[@@match](string)
        // 21.2.5.9 RegExp.prototype[@@search](string)
        : function (string) { return rxfn.call(string, this); }
      );
    }
  };

  var anObject = _anObject;
  var toObject$1 = _toObject;
  var toLength$1 = _toLength;
  var toInteger$1 = _toInteger;
  var advanceStringIndex = _advanceStringIndex;
  var regExpExec = _regexpExecAbstract;
  var max$1 = Math.max;
  var min$1 = Math.min;
  var floor = Math.floor;
  var SUBSTITUTION_SYMBOLS = /\$([$&`']|\d\d?|<[^>]*>)/g;
  var SUBSTITUTION_SYMBOLS_NO_NAMED = /\$([$&`']|\d\d?)/g;

  var maybeToString = function (it) {
    return it === undefined ? it : String(it);
  };

  // @@replace logic
  _fixReWks('replace', 2, function (defined, REPLACE, $replace, maybeCallNative) {
    return [
      // `String.prototype.replace` method
      // https://tc39.github.io/ecma262/#sec-string.prototype.replace
      function replace(searchValue, replaceValue) {
        var O = defined(this);
        var fn = searchValue == undefined ? undefined : searchValue[REPLACE];
        return fn !== undefined
          ? fn.call(searchValue, O, replaceValue)
          : $replace.call(String(O), searchValue, replaceValue);
      },
      // `RegExp.prototype[@@replace]` method
      // https://tc39.github.io/ecma262/#sec-regexp.prototype-@@replace
      function (regexp, replaceValue) {
        var res = maybeCallNative($replace, regexp, this, replaceValue);
        if (res.done) return res.value;

        var rx = anObject(regexp);
        var S = String(this);
        var functionalReplace = typeof replaceValue === 'function';
        if (!functionalReplace) replaceValue = String(replaceValue);
        var global = rx.global;
        if (global) {
          var fullUnicode = rx.unicode;
          rx.lastIndex = 0;
        }
        var results = [];
        while (true) {
          var result = regExpExec(rx, S);
          if (result === null) break;
          results.push(result);
          if (!global) break;
          var matchStr = String(result[0]);
          if (matchStr === '') rx.lastIndex = advanceStringIndex(S, toLength$1(rx.lastIndex), fullUnicode);
        }
        var accumulatedResult = '';
        var nextSourcePosition = 0;
        for (var i = 0; i < results.length; i++) {
          result = results[i];
          var matched = String(result[0]);
          var position = max$1(min$1(toInteger$1(result.index), S.length), 0);
          var captures = [];
          // NOTE: This is equivalent to
          //   captures = result.slice(1).map(maybeToString)
          // but for some reason `nativeSlice.call(result, 1, result.length)` (called in
          // the slice polyfill when slicing native arrays) "doesn't work" in safari 9 and
          // causes a crash (https://pastebin.com/N21QzeQA) when trying to debug it.
          for (var j = 1; j < result.length; j++) captures.push(maybeToString(result[j]));
          var namedCaptures = result.groups;
          if (functionalReplace) {
            var replacerArgs = [matched].concat(captures, position, S);
            if (namedCaptures !== undefined) replacerArgs.push(namedCaptures);
            var replacement = String(replaceValue.apply(undefined, replacerArgs));
          } else {
            replacement = getSubstitution(matched, S, position, captures, namedCaptures, replaceValue);
          }
          if (position >= nextSourcePosition) {
            accumulatedResult += S.slice(nextSourcePosition, position) + replacement;
            nextSourcePosition = position + matched.length;
          }
        }
        return accumulatedResult + S.slice(nextSourcePosition);
      }
    ];

      // https://tc39.github.io/ecma262/#sec-getsubstitution
    function getSubstitution(matched, str, position, captures, namedCaptures, replacement) {
      var tailPos = position + matched.length;
      var m = captures.length;
      var symbols = SUBSTITUTION_SYMBOLS_NO_NAMED;
      if (namedCaptures !== undefined) {
        namedCaptures = toObject$1(namedCaptures);
        symbols = SUBSTITUTION_SYMBOLS;
      }
      return $replace.call(replacement, symbols, function (match, ch) {
        var capture;
        switch (ch.charAt(0)) {
          case '$': return '$';
          case '&': return matched;
          case '`': return str.slice(0, position);
          case "'": return str.slice(tailPos);
          case '<':
            capture = namedCaptures[ch.slice(1, -1)];
            break;
          default: // \d\d?
            var n = +ch;
            if (n === 0) return match;
            if (n > m) {
              var f = floor(n / 10);
              if (f === 0) return match;
              if (f <= m) return captures[f - 1] === undefined ? ch.charAt(1) : captures[f - 1] + ch.charAt(1);
              return match;
            }
            capture = captures[n - 1];
        }
        return capture === undefined ? '' : capture;
      });
    }
  });

  var HYPHA_SALE_CODE = "sale.hypha";
  var HYPHA_SALE_SCOPE = "sale.hypha";
  var TABLES$1 = {
    PRICE: "price",
    SOLD: "sold",
    ROUNDS: "rounds",
    PRICE_HISTORY: "pricehistory",
    PAY_HISTORY: "payhistory"
  };

  var parseCurrency = function parseCurrency(formattedNumber) {
    var currencySymbol = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "USD";
    return Number(formattedNumber.substring(0, formattedNumber.length - currencySymbol.length));
  };

  var HyphaSaleContract = /*#__PURE__*/function () {
    function HyphaSaleContract(rpc) {
      _classCallCheck$1(this, HyphaSaleContract);

      this.rpc = rpc;
    }

    _createClass$1(HyphaSaleContract, [{
      key: "getRows",
      value: function () {
        var _getRows = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee(_ref) {
          var table, startRow, endRow, _ref$limit, limit, _yield$this$rpc$get_t, rows, more, nextKey, loadMore;

          return regeneratorRuntime.wrap(function _callee$(_context) {
            while (1) {
              switch (_context.prev = _context.next) {
                case 0:
                  table = _ref.table, startRow = _ref.startRow, endRow = _ref.endRow, _ref$limit = _ref.limit, limit = _ref$limit === void 0 ? 10 : _ref$limit;
                  _context.next = 3;
                  return this.rpc.get_table_rows({
                    json: true,
                    code: HYPHA_SALE_CODE,
                    scope: HYPHA_SALE_SCOPE,
                    lower_bound: startRow,
                    upper_bound: endRow,
                    limit,
                    table
                  });

                case 3:
                  _yield$this$rpc$get_t = _context.sent;
                  rows = _yield$this$rpc$get_t.rows;
                  more = _yield$this$rpc$get_t.more;
                  nextKey = _yield$this$rpc$get_t.nextKey;

                  loadMore = more && function () {
                    return this.getRows({
                      table,
                      startRow: nextKey,
                      limit
                    });
                  };

                  return _context.abrupt("return", {
                    rows,
                    loadMore
                  });

                case 9:
                case "end":
                  return _context.stop();
              }
            }
          }, _callee, this);
        }));

        function getRows(_x) {
          return _getRows.apply(this, arguments);
        }

        return getRows;
      }()
      /**
       * getRoundDetails - returns latest round id, current price of hypha and remaining amount of tokens in this round
       * @return
       * @memberof HyphaTokenSale
       */

    }, {
      key: "getRoundDetails",
      value: function () {
        var _getRoundDetails = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee2() {
          var _yield$this$getRows, _yield$this$getRows$r, roundDetails, currentRound, usdPerHyphaFormatted, usdPerHypha, hyphaRemainingThisRound;

          return regeneratorRuntime.wrap(function _callee2$(_context2) {
            while (1) {
              switch (_context2.prev = _context2.next) {
                case 0:
                  _context2.next = 2;
                  return this.getRows({
                    table: TABLES$1.PRICE,
                    limit: 1
                  });

                case 2:
                  _yield$this$getRows = _context2.sent;
                  _yield$this$getRows$r = _slicedToArray$1(_yield$this$getRows.rows, 1);
                  roundDetails = _yield$this$getRows$r[0];
                  currentRound = roundDetails.current_round_id;
                  usdPerHyphaFormatted = roundDetails.hypha_usd;
                  usdPerHypha = parseCurrency(usdPerHyphaFormatted, "USD");
                  hyphaRemainingThisRound = roundDetails.remaining / 100;
                  return _context2.abrupt("return", {
                    currentRound,
                    usdPerHypha,
                    hyphaRemainingThisRound
                  });

                case 10:
                case "end":
                  return _context2.stop();
              }
            }
          }, _callee2, this);
        }));

        function getRoundDetails() {
          return _getRoundDetails.apply(this, arguments);
        }

        return getRoundDetails;
      }()
    }, {
      key: "getPricePerRound",
      value: function () {
        var _getPricePerRound = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee3() {
          var _yield$this$getRows2, rounds, roundMap;

          return regeneratorRuntime.wrap(function _callee3$(_context3) {
            while (1) {
              switch (_context3.prev = _context3.next) {
                case 0:
                  _context3.next = 2;
                  return this.getRows({
                    table: TABLES$1.ROUNDS,
                    limit: 100
                  });

                case 2:
                  _yield$this$getRows2 = _context3.sent;
                  rounds = _yield$this$getRows2.rows;
                  roundMap = rounds && rounds.map(function (_ref2) {
                    var id = _ref2.id,
                        max_sold = _ref2.max_sold,
                        hypha_usd = _ref2.hypha_usd;
                    return {
                      roundNo: id,
                      maxSold: max_sold / 100,
                      hyphaPerUsd: parseCurrency(hypha_usd)
                    };
                  }).reduce(function (roundMap, round) {
                    return _objectSpread2(_objectSpread2({}, roundMap), {}, {
                      [round.roundNo]: round
                    });
                  }, {});
                  return _context3.abrupt("return", roundMap);

                case 6:
                case "end":
                  return _context3.stop();
              }
            }
          }, _callee3, this);
        }));

        function getPricePerRound() {
          return _getPricePerRound.apply(this, arguments);
        }

        return getPricePerRound;
      }()
    }, {
      key: "getHyphaBalance",
      value: function () {
        var _getHyphaBalance = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee4() {
          var code, account, currencySymbol, _yield$this$rpc$get_c, _yield$this$rpc$get_c2, balanceFormatted, balance;

          return regeneratorRuntime.wrap(function _callee4$(_context4) {
            while (1) {
              switch (_context4.prev = _context4.next) {
                case 0:
                  code = "hypha.hypha";
                  account = "sale.hypha";
                  currencySymbol = "HYPHA";
                  _context4.next = 5;
                  return this.rpc.get_currency_balance(code, account, currencySymbol);

                case 5:
                  _yield$this$rpc$get_c = _context4.sent;
                  _yield$this$rpc$get_c2 = _slicedToArray$1(_yield$this$rpc$get_c, 1);
                  balanceFormatted = _yield$this$rpc$get_c2[0];
                  balance = balanceFormatted && balanceFormatted.length > currencySymbol.length ? balanceFormatted.replace(currencySymbol, "").trim() : 0;
                  return _context4.abrupt("return", balance);

                case 10:
                case "end":
                  return _context4.stop();
              }
            }
          }, _callee4, this);
        }));

        function getHyphaBalance() {
          return _getHyphaBalance.apply(this, arguments);
        }

        return getHyphaBalance;
      }()
    }, {
      key: "calculateCost",
      value: function calculateCost(_ref3) {
        var amount = _ref3.amount,
            currentRound = _ref3.currentRound,
            hyphaRemainingThisRound = _ref3.hyphaRemainingThisRound,
            priceMap = _ref3.priceMap,
            _ref3$prevCost = _ref3.prevCost,
            prevCost = _ref3$prevCost === void 0 ? 0 : _ref3$prevCost;
        var _priceMap$currentRoun = priceMap[currentRound],
            hyphaPerUsd = _priceMap$currentRoun.hyphaPerUsd,
            maxSoldThisRound = _priceMap$currentRoun.maxSold;
        if (Number(amount) <= Number(hyphaRemainingThisRound)) return prevCost + Number(amount) * Number(hyphaPerUsd);
        var currentCost = prevCost + hyphaRemainingThisRound * hyphaPerUsd;
        var remainingAmount = amount - hyphaRemainingThisRound;
        var nextRound = Number(currentRound) + 1;
        var maxSoldNextRound = priceMap[nextRound].maxSold;
        var hyphaRemainingNextRound = maxSoldNextRound - maxSoldThisRound;
        return this.calculateCost({
          amount: remainingAmount,
          currentRound: nextRound,
          hyphaRemainingThisRound: hyphaRemainingNextRound,
          prevCost: currentCost,
          priceMap
        });
      }
    }]);

    return HyphaSaleContract;
  }();

  // to indexed object, toObject with fallback for non-array-like ES3 strings
  var IObject$1 = _iobject;
  var defined = _defined;
  var _toIobject = function (it) {
    return IObject$1(defined(it));
  };

  var toInteger = _toInteger;
  var max = Math.max;
  var min = Math.min;
  var _toAbsoluteIndex = function (index, length) {
    index = toInteger(index);
    return index < 0 ? max(index + length, 0) : min(index, length);
  };

  // false -> Array#indexOf
  // true  -> Array#includes
  var toIObject$1 = _toIobject;
  var toLength = _toLength;
  var toAbsoluteIndex = _toAbsoluteIndex;
  var _arrayIncludes = function (IS_INCLUDES) {
    return function ($this, el, fromIndex) {
      var O = toIObject$1($this);
      var length = toLength(O.length);
      var index = toAbsoluteIndex(fromIndex, length);
      var value;
      // Array#includes uses SameValueZero equality algorithm
      // eslint-disable-next-line no-self-compare
      if (IS_INCLUDES && el != el) while (length > index) {
        value = O[index++];
        // eslint-disable-next-line no-self-compare
        if (value != value) return true;
      // Array#indexOf ignores holes, Array#includes - not
      } else for (;length > index; index++) if (IS_INCLUDES || index in O) {
        if (O[index] === el) return IS_INCLUDES || index || 0;
      } return !IS_INCLUDES && -1;
    };
  };

  var shared = _shared.exports('keys');
  var uid = _uid;
  var _sharedKey = function (key) {
    return shared[key] || (shared[key] = uid(key));
  };

  var has = _has;
  var toIObject = _toIobject;
  var arrayIndexOf = _arrayIncludes(false);
  var IE_PROTO = _sharedKey('IE_PROTO');

  var _objectKeysInternal = function (object, names) {
    var O = toIObject(object);
    var i = 0;
    var result = [];
    var key;
    for (key in O) if (key != IE_PROTO) has(O, key) && result.push(key);
    // Don't enum bug & hidden keys
    while (names.length > i) if (has(O, key = names[i++])) {
      ~arrayIndexOf(result, key) || result.push(key);
    }
    return result;
  };

  // IE 8- don't enum bug keys
  var _enumBugKeys = (
    'constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf'
  ).split(',');

  // 19.1.2.14 / 15.2.3.14 Object.keys(O)
  var $keys = _objectKeysInternal;
  var enumBugKeys = _enumBugKeys;

  var _objectKeys = Object.keys || function keys(O) {
    return $keys(O, enumBugKeys);
  };

  var _objectGops = {};

  _objectGops.f = Object.getOwnPropertySymbols;

  var _objectPie = {};

  _objectPie.f = {}.propertyIsEnumerable;

  // 19.1.2.1 Object.assign(target, source, ...)
  var DESCRIPTORS = _descriptors;
  var getKeys = _objectKeys;
  var gOPS = _objectGops;
  var pIE = _objectPie;
  var toObject = _toObject;
  var IObject = _iobject;
  var $assign = Object.assign;

  // should work with symbols and should have deterministic property order (V8 bug)
  var _objectAssign = !$assign || _fails(function () {
    var A = {};
    var B = {};
    // eslint-disable-next-line no-undef
    var S = Symbol();
    var K = 'abcdefghijklmnopqrst';
    A[S] = 7;
    K.split('').forEach(function (k) { B[k] = k; });
    return $assign({}, A)[S] != 7 || Object.keys($assign({}, B)).join('') != K;
  }) ? function assign(target, source) { // eslint-disable-line no-unused-vars
    var T = toObject(target);
    var aLen = arguments.length;
    var index = 1;
    var getSymbols = gOPS.f;
    var isEnum = pIE.f;
    while (aLen > index) {
      var S = IObject(arguments[index++]);
      var keys = getSymbols ? getKeys(S).concat(getSymbols(S)) : getKeys(S);
      var length = keys.length;
      var j = 0;
      var key;
      while (length > j) {
        key = keys[j++];
        if (!DESCRIPTORS || isEnum.call(S, key)) T[key] = S[key];
      }
    } return T;
  } : $assign;

  // 19.1.3.1 Object.assign(target, source)
  var $export = _export;

  $export($export.S + $export.F, 'Object', { assign: _objectAssign });

  var SEEDS_ACCOUNTS_CODE = "accts.seeds";
  var SEEDS_ACCOUNTS_SCOPE = "accts.seeds";
  var TABLES = {
    USERS: "users"
  };

  function parseTags(tags) {
    return tags ? JSON.parse(tags) : [];
  }

  var Profile = /*#__PURE__*/_createClass$1(function Profile(blockchainProfile) {
    _classCallCheck$1(this, Profile);

    Object.assign(this, blockchainProfile);
    this.skills = parseTags(blockchainProfile.skills);
    this.roles = parseTags(blockchainProfile.roles);
    this.interests = parseTags(blockchainProfile.interests);
  });

  var SeedsContract = /*#__PURE__*/function () {
    function SeedsContract(rpc) {
      _classCallCheck$1(this, SeedsContract);

      this.rpc = rpc;
    }

    _createClass$1(SeedsContract, [{
      key: "getRows",
      value: function () {
        var _getRows = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee(_ref) {
          var table, startRow, endRow, _ref$limit, limit, _yield$this$rpc$get_t, rows, more, nextKey, loadMore;

          return regeneratorRuntime.wrap(function _callee$(_context) {
            while (1) {
              switch (_context.prev = _context.next) {
                case 0:
                  table = _ref.table, startRow = _ref.startRow, endRow = _ref.endRow, _ref$limit = _ref.limit, limit = _ref$limit === void 0 ? 10 : _ref$limit;
                  _context.next = 3;
                  return this.rpc.get_table_rows({
                    json: true,
                    code: SEEDS_ACCOUNTS_CODE,
                    scope: SEEDS_ACCOUNTS_SCOPE,
                    lower_bound: startRow,
                    upper_bound: endRow,
                    limit,
                    table
                  });

                case 3:
                  _yield$this$rpc$get_t = _context.sent;
                  rows = _yield$this$rpc$get_t.rows;
                  more = _yield$this$rpc$get_t.more;
                  nextKey = _yield$this$rpc$get_t.nextKey;

                  loadMore = more && function () {
                    return this.getRows({
                      table,
                      startRow: nextKey,
                      limit
                    });
                  };

                  return _context.abrupt("return", {
                    rows,
                    loadMore
                  });

                case 9:
                case "end":
                  return _context.stop();
              }
            }
          }, _callee, this);
        }));

        function getRows(_x) {
          return _getRows.apply(this, arguments);
        }

        return getRows;
      }()
      /**
       * getProfile - returns profile instance based on account name
       * @param  {string} accountName
       * @return {Profile}
       * @memberof SeedsContract
       */

    }, {
      key: "getProfile",
      value: function () {
        var _getProfile = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee2(accountName) {
          var _yield$this$getRows, _yield$this$getRows$r, _yield$this$getRows$r2, profile;

          return regeneratorRuntime.wrap(function _callee2$(_context2) {
            while (1) {
              switch (_context2.prev = _context2.next) {
                case 0:
                  _context2.next = 2;
                  return this.getRows({
                    startRow: accountName,
                    endRow: accountName,
                    limit: 1,
                    table: TABLES.USERS
                  });

                case 2:
                  _yield$this$getRows = _context2.sent;
                  _yield$this$getRows$r = _yield$this$getRows.rows;
                  _yield$this$getRows$r = _yield$this$getRows$r === void 0 ? [] : _yield$this$getRows$r;
                  _yield$this$getRows$r2 = _slicedToArray$1(_yield$this$getRows$r, 1), profile = _yield$this$getRows$r2[0];

                  if (!(!profile || accountName !== profile.account)) {
                    _context2.next = 8;
                    break;
                  }

                  throw new Error("account-not-found");

                case 8:
                  return _context2.abrupt("return", new Profile(profile));

                case 9:
                case "end":
                  return _context2.stop();
              }
            }
          }, _callee2, this);
        }));

        function getProfile(_x2) {
          return _getProfile.apply(this, arguments);
        }

        return getProfile;
      }()
    }]);

    return SeedsContract;
  }();

  var eosjsJsonrpc = {};

  var eosjsNumeric = {};

  var hash = {};

  var utils$9 = {};

  var minimalisticAssert = assert$5;

  function assert$5(val, msg) {
    if (!val)
      throw new Error(msg || 'Assertion failed');
  }

  assert$5.equal = function assertEqual(l, r, msg) {
    if (l != r)
      throw new Error(msg || ('Assertion failed: ' + l + ' != ' + r));
  };

  var inherits$1 = {exports: {}};

  var inherits_browser = {exports: {}};

  if (typeof Object.create === 'function') {
    // implementation from standard node.js 'util' module
    inherits_browser.exports = function inherits(ctor, superCtor) {
      if (superCtor) {
        ctor.super_ = superCtor;
        ctor.prototype = Object.create(superCtor.prototype, {
          constructor: {
            value: ctor,
            enumerable: false,
            writable: true,
            configurable: true
          }
        });
      }
    };
  } else {
    // old school shim for old browsers
    inherits_browser.exports = function inherits(ctor, superCtor) {
      if (superCtor) {
        ctor.super_ = superCtor;
        var TempCtor = function () {};
        TempCtor.prototype = superCtor.prototype;
        ctor.prototype = new TempCtor();
        ctor.prototype.constructor = ctor;
      }
    };
  }

  try {
    var util = require('util');
    /* istanbul ignore next */
    if (typeof util.inherits !== 'function') throw '';
    inherits$1.exports = util.inherits;
  } catch (e) {
    /* istanbul ignore next */
    inherits$1.exports = inherits_browser.exports;
  }

  var assert$4 = minimalisticAssert;
  var inherits = inherits$1.exports;

  utils$9.inherits = inherits;

  function isSurrogatePair(msg, i) {
    if ((msg.charCodeAt(i) & 0xFC00) !== 0xD800) {
      return false;
    }
    if (i < 0 || i + 1 >= msg.length) {
      return false;
    }
    return (msg.charCodeAt(i + 1) & 0xFC00) === 0xDC00;
  }

  function toArray(msg, enc) {
    if (Array.isArray(msg))
      return msg.slice();
    if (!msg)
      return [];
    var res = [];
    if (typeof msg === 'string') {
      if (!enc) {
        // Inspired by stringToUtf8ByteArray() in closure-library by Google
        // https://github.com/google/closure-library/blob/8598d87242af59aac233270742c8984e2b2bdbe0/closure/goog/crypt/crypt.js#L117-L143
        // Apache License 2.0
        // https://github.com/google/closure-library/blob/master/LICENSE
        var p = 0;
        for (var i = 0; i < msg.length; i++) {
          var c = msg.charCodeAt(i);
          if (c < 128) {
            res[p++] = c;
          } else if (c < 2048) {
            res[p++] = (c >> 6) | 192;
            res[p++] = (c & 63) | 128;
          } else if (isSurrogatePair(msg, i)) {
            c = 0x10000 + ((c & 0x03FF) << 10) + (msg.charCodeAt(++i) & 0x03FF);
            res[p++] = (c >> 18) | 240;
            res[p++] = ((c >> 12) & 63) | 128;
            res[p++] = ((c >> 6) & 63) | 128;
            res[p++] = (c & 63) | 128;
          } else {
            res[p++] = (c >> 12) | 224;
            res[p++] = ((c >> 6) & 63) | 128;
            res[p++] = (c & 63) | 128;
          }
        }
      } else if (enc === 'hex') {
        msg = msg.replace(/[^a-z0-9]+/ig, '');
        if (msg.length % 2 !== 0)
          msg = '0' + msg;
        for (i = 0; i < msg.length; i += 2)
          res.push(parseInt(msg[i] + msg[i + 1], 16));
      }
    } else {
      for (i = 0; i < msg.length; i++)
        res[i] = msg[i] | 0;
    }
    return res;
  }
  utils$9.toArray = toArray;

  function toHex(msg) {
    var res = '';
    for (var i = 0; i < msg.length; i++)
      res += zero2(msg[i].toString(16));
    return res;
  }
  utils$9.toHex = toHex;

  function htonl(w) {
    var res = (w >>> 24) |
              ((w >>> 8) & 0xff00) |
              ((w << 8) & 0xff0000) |
              ((w & 0xff) << 24);
    return res >>> 0;
  }
  utils$9.htonl = htonl;

  function toHex32(msg, endian) {
    var res = '';
    for (var i = 0; i < msg.length; i++) {
      var w = msg[i];
      if (endian === 'little')
        w = htonl(w);
      res += zero8(w.toString(16));
    }
    return res;
  }
  utils$9.toHex32 = toHex32;

  function zero2(word) {
    if (word.length === 1)
      return '0' + word;
    else
      return word;
  }
  utils$9.zero2 = zero2;

  function zero8(word) {
    if (word.length === 7)
      return '0' + word;
    else if (word.length === 6)
      return '00' + word;
    else if (word.length === 5)
      return '000' + word;
    else if (word.length === 4)
      return '0000' + word;
    else if (word.length === 3)
      return '00000' + word;
    else if (word.length === 2)
      return '000000' + word;
    else if (word.length === 1)
      return '0000000' + word;
    else
      return word;
  }
  utils$9.zero8 = zero8;

  function join32(msg, start, end, endian) {
    var len = end - start;
    assert$4(len % 4 === 0);
    var res = new Array(len / 4);
    for (var i = 0, k = start; i < res.length; i++, k += 4) {
      var w;
      if (endian === 'big')
        w = (msg[k] << 24) | (msg[k + 1] << 16) | (msg[k + 2] << 8) | msg[k + 3];
      else
        w = (msg[k + 3] << 24) | (msg[k + 2] << 16) | (msg[k + 1] << 8) | msg[k];
      res[i] = w >>> 0;
    }
    return res;
  }
  utils$9.join32 = join32;

  function split32(msg, endian) {
    var res = new Array(msg.length * 4);
    for (var i = 0, k = 0; i < msg.length; i++, k += 4) {
      var m = msg[i];
      if (endian === 'big') {
        res[k] = m >>> 24;
        res[k + 1] = (m >>> 16) & 0xff;
        res[k + 2] = (m >>> 8) & 0xff;
        res[k + 3] = m & 0xff;
      } else {
        res[k + 3] = m >>> 24;
        res[k + 2] = (m >>> 16) & 0xff;
        res[k + 1] = (m >>> 8) & 0xff;
        res[k] = m & 0xff;
      }
    }
    return res;
  }
  utils$9.split32 = split32;

  function rotr32$1(w, b) {
    return (w >>> b) | (w << (32 - b));
  }
  utils$9.rotr32 = rotr32$1;

  function rotl32$2(w, b) {
    return (w << b) | (w >>> (32 - b));
  }
  utils$9.rotl32 = rotl32$2;

  function sum32$3(a, b) {
    return (a + b) >>> 0;
  }
  utils$9.sum32 = sum32$3;

  function sum32_3$1(a, b, c) {
    return (a + b + c) >>> 0;
  }
  utils$9.sum32_3 = sum32_3$1;

  function sum32_4$2(a, b, c, d) {
    return (a + b + c + d) >>> 0;
  }
  utils$9.sum32_4 = sum32_4$2;

  function sum32_5$2(a, b, c, d, e) {
    return (a + b + c + d + e) >>> 0;
  }
  utils$9.sum32_5 = sum32_5$2;

  function sum64$1(buf, pos, ah, al) {
    var bh = buf[pos];
    var bl = buf[pos + 1];

    var lo = (al + bl) >>> 0;
    var hi = (lo < al ? 1 : 0) + ah + bh;
    buf[pos] = hi >>> 0;
    buf[pos + 1] = lo;
  }
  utils$9.sum64 = sum64$1;

  function sum64_hi$1(ah, al, bh, bl) {
    var lo = (al + bl) >>> 0;
    var hi = (lo < al ? 1 : 0) + ah + bh;
    return hi >>> 0;
  }
  utils$9.sum64_hi = sum64_hi$1;

  function sum64_lo$1(ah, al, bh, bl) {
    var lo = al + bl;
    return lo >>> 0;
  }
  utils$9.sum64_lo = sum64_lo$1;

  function sum64_4_hi$1(ah, al, bh, bl, ch, cl, dh, dl) {
    var carry = 0;
    var lo = al;
    lo = (lo + bl) >>> 0;
    carry += lo < al ? 1 : 0;
    lo = (lo + cl) >>> 0;
    carry += lo < cl ? 1 : 0;
    lo = (lo + dl) >>> 0;
    carry += lo < dl ? 1 : 0;

    var hi = ah + bh + ch + dh + carry;
    return hi >>> 0;
  }
  utils$9.sum64_4_hi = sum64_4_hi$1;

  function sum64_4_lo$1(ah, al, bh, bl, ch, cl, dh, dl) {
    var lo = al + bl + cl + dl;
    return lo >>> 0;
  }
  utils$9.sum64_4_lo = sum64_4_lo$1;

  function sum64_5_hi$1(ah, al, bh, bl, ch, cl, dh, dl, eh, el) {
    var carry = 0;
    var lo = al;
    lo = (lo + bl) >>> 0;
    carry += lo < al ? 1 : 0;
    lo = (lo + cl) >>> 0;
    carry += lo < cl ? 1 : 0;
    lo = (lo + dl) >>> 0;
    carry += lo < dl ? 1 : 0;
    lo = (lo + el) >>> 0;
    carry += lo < el ? 1 : 0;

    var hi = ah + bh + ch + dh + eh + carry;
    return hi >>> 0;
  }
  utils$9.sum64_5_hi = sum64_5_hi$1;

  function sum64_5_lo$1(ah, al, bh, bl, ch, cl, dh, dl, eh, el) {
    var lo = al + bl + cl + dl + el;

    return lo >>> 0;
  }
  utils$9.sum64_5_lo = sum64_5_lo$1;

  function rotr64_hi$1(ah, al, num) {
    var r = (al << (32 - num)) | (ah >>> num);
    return r >>> 0;
  }
  utils$9.rotr64_hi = rotr64_hi$1;

  function rotr64_lo$1(ah, al, num) {
    var r = (ah << (32 - num)) | (al >>> num);
    return r >>> 0;
  }
  utils$9.rotr64_lo = rotr64_lo$1;

  function shr64_hi$1(ah, al, num) {
    return ah >>> num;
  }
  utils$9.shr64_hi = shr64_hi$1;

  function shr64_lo$1(ah, al, num) {
    var r = (ah << (32 - num)) | (al >>> num);
    return r >>> 0;
  }
  utils$9.shr64_lo = shr64_lo$1;

  var common$5 = {};

  var utils$8 = utils$9;
  var assert$3 = minimalisticAssert;

  function BlockHash$4() {
    this.pending = null;
    this.pendingTotal = 0;
    this.blockSize = this.constructor.blockSize;
    this.outSize = this.constructor.outSize;
    this.hmacStrength = this.constructor.hmacStrength;
    this.padLength = this.constructor.padLength / 8;
    this.endian = 'big';

    this._delta8 = this.blockSize / 8;
    this._delta32 = this.blockSize / 32;
  }
  common$5.BlockHash = BlockHash$4;

  BlockHash$4.prototype.update = function update(msg, enc) {
    // Convert message to array, pad it, and join into 32bit blocks
    msg = utils$8.toArray(msg, enc);
    if (!this.pending)
      this.pending = msg;
    else
      this.pending = this.pending.concat(msg);
    this.pendingTotal += msg.length;

    // Enough data, try updating
    if (this.pending.length >= this._delta8) {
      msg = this.pending;

      // Process pending data in blocks
      var r = msg.length % this._delta8;
      this.pending = msg.slice(msg.length - r, msg.length);
      if (this.pending.length === 0)
        this.pending = null;

      msg = utils$8.join32(msg, 0, msg.length - r, this.endian);
      for (var i = 0; i < msg.length; i += this._delta32)
        this._update(msg, i, i + this._delta32);
    }

    return this;
  };

  BlockHash$4.prototype.digest = function digest(enc) {
    this.update(this._pad());
    assert$3(this.pending === null);

    return this._digest(enc);
  };

  BlockHash$4.prototype._pad = function pad() {
    var len = this.pendingTotal;
    var bytes = this._delta8;
    var k = bytes - ((len + this.padLength) % bytes);
    var res = new Array(k + this.padLength);
    res[0] = 0x80;
    for (var i = 1; i < k; i++)
      res[i] = 0;

    // Append length
    len <<= 3;
    if (this.endian === 'big') {
      for (var t = 8; t < this.padLength; t++)
        res[i++] = 0;

      res[i++] = 0;
      res[i++] = 0;
      res[i++] = 0;
      res[i++] = 0;
      res[i++] = (len >>> 24) & 0xff;
      res[i++] = (len >>> 16) & 0xff;
      res[i++] = (len >>> 8) & 0xff;
      res[i++] = len & 0xff;
    } else {
      res[i++] = len & 0xff;
      res[i++] = (len >>> 8) & 0xff;
      res[i++] = (len >>> 16) & 0xff;
      res[i++] = (len >>> 24) & 0xff;
      res[i++] = 0;
      res[i++] = 0;
      res[i++] = 0;
      res[i++] = 0;

      for (t = 8; t < this.padLength; t++)
        res[i++] = 0;
    }

    return res;
  };

  var sha = {};

  var common$4 = {};

  var utils$7 = utils$9;
  var rotr32 = utils$7.rotr32;

  function ft_1$1(s, x, y, z) {
    if (s === 0)
      return ch32$1(x, y, z);
    if (s === 1 || s === 3)
      return p32(x, y, z);
    if (s === 2)
      return maj32$1(x, y, z);
  }
  common$4.ft_1 = ft_1$1;

  function ch32$1(x, y, z) {
    return (x & y) ^ ((~x) & z);
  }
  common$4.ch32 = ch32$1;

  function maj32$1(x, y, z) {
    return (x & y) ^ (x & z) ^ (y & z);
  }
  common$4.maj32 = maj32$1;

  function p32(x, y, z) {
    return x ^ y ^ z;
  }
  common$4.p32 = p32;

  function s0_256$1(x) {
    return rotr32(x, 2) ^ rotr32(x, 13) ^ rotr32(x, 22);
  }
  common$4.s0_256 = s0_256$1;

  function s1_256$1(x) {
    return rotr32(x, 6) ^ rotr32(x, 11) ^ rotr32(x, 25);
  }
  common$4.s1_256 = s1_256$1;

  function g0_256$1(x) {
    return rotr32(x, 7) ^ rotr32(x, 18) ^ (x >>> 3);
  }
  common$4.g0_256 = g0_256$1;

  function g1_256$1(x) {
    return rotr32(x, 17) ^ rotr32(x, 19) ^ (x >>> 10);
  }
  common$4.g1_256 = g1_256$1;

  var utils$6 = utils$9;
  var common$3 = common$5;
  var shaCommon$1 = common$4;

  var rotl32$1 = utils$6.rotl32;
  var sum32$2 = utils$6.sum32;
  var sum32_5$1 = utils$6.sum32_5;
  var ft_1 = shaCommon$1.ft_1;
  var BlockHash$3 = common$3.BlockHash;

  var sha1_K = [
    0x5A827999, 0x6ED9EBA1,
    0x8F1BBCDC, 0xCA62C1D6
  ];

  function SHA1() {
    if (!(this instanceof SHA1))
      return new SHA1();

    BlockHash$3.call(this);
    this.h = [
      0x67452301, 0xefcdab89, 0x98badcfe,
      0x10325476, 0xc3d2e1f0 ];
    this.W = new Array(80);
  }

  utils$6.inherits(SHA1, BlockHash$3);
  var _1 = SHA1;

  SHA1.blockSize = 512;
  SHA1.outSize = 160;
  SHA1.hmacStrength = 80;
  SHA1.padLength = 64;

  SHA1.prototype._update = function _update(msg, start) {
    var W = this.W;

    for (var i = 0; i < 16; i++)
      W[i] = msg[start + i];

    for(; i < W.length; i++)
      W[i] = rotl32$1(W[i - 3] ^ W[i - 8] ^ W[i - 14] ^ W[i - 16], 1);

    var a = this.h[0];
    var b = this.h[1];
    var c = this.h[2];
    var d = this.h[3];
    var e = this.h[4];

    for (i = 0; i < W.length; i++) {
      var s = ~~(i / 20);
      var t = sum32_5$1(rotl32$1(a, 5), ft_1(s, b, c, d), e, W[i], sha1_K[s]);
      e = d;
      d = c;
      c = rotl32$1(b, 30);
      b = a;
      a = t;
    }

    this.h[0] = sum32$2(this.h[0], a);
    this.h[1] = sum32$2(this.h[1], b);
    this.h[2] = sum32$2(this.h[2], c);
    this.h[3] = sum32$2(this.h[3], d);
    this.h[4] = sum32$2(this.h[4], e);
  };

  SHA1.prototype._digest = function digest(enc) {
    if (enc === 'hex')
      return utils$6.toHex32(this.h, 'big');
    else
      return utils$6.split32(this.h, 'big');
  };

  var utils$5 = utils$9;
  var common$2 = common$5;
  var shaCommon = common$4;
  var assert$2 = minimalisticAssert;

  var sum32$1 = utils$5.sum32;
  var sum32_4$1 = utils$5.sum32_4;
  var sum32_5 = utils$5.sum32_5;
  var ch32 = shaCommon.ch32;
  var maj32 = shaCommon.maj32;
  var s0_256 = shaCommon.s0_256;
  var s1_256 = shaCommon.s1_256;
  var g0_256 = shaCommon.g0_256;
  var g1_256 = shaCommon.g1_256;

  var BlockHash$2 = common$2.BlockHash;

  var sha256_K = [
    0x428a2f98, 0x71374491, 0xb5c0fbcf, 0xe9b5dba5,
    0x3956c25b, 0x59f111f1, 0x923f82a4, 0xab1c5ed5,
    0xd807aa98, 0x12835b01, 0x243185be, 0x550c7dc3,
    0x72be5d74, 0x80deb1fe, 0x9bdc06a7, 0xc19bf174,
    0xe49b69c1, 0xefbe4786, 0x0fc19dc6, 0x240ca1cc,
    0x2de92c6f, 0x4a7484aa, 0x5cb0a9dc, 0x76f988da,
    0x983e5152, 0xa831c66d, 0xb00327c8, 0xbf597fc7,
    0xc6e00bf3, 0xd5a79147, 0x06ca6351, 0x14292967,
    0x27b70a85, 0x2e1b2138, 0x4d2c6dfc, 0x53380d13,
    0x650a7354, 0x766a0abb, 0x81c2c92e, 0x92722c85,
    0xa2bfe8a1, 0xa81a664b, 0xc24b8b70, 0xc76c51a3,
    0xd192e819, 0xd6990624, 0xf40e3585, 0x106aa070,
    0x19a4c116, 0x1e376c08, 0x2748774c, 0x34b0bcb5,
    0x391c0cb3, 0x4ed8aa4a, 0x5b9cca4f, 0x682e6ff3,
    0x748f82ee, 0x78a5636f, 0x84c87814, 0x8cc70208,
    0x90befffa, 0xa4506ceb, 0xbef9a3f7, 0xc67178f2
  ];

  function SHA256$1() {
    if (!(this instanceof SHA256$1))
      return new SHA256$1();

    BlockHash$2.call(this);
    this.h = [
      0x6a09e667, 0xbb67ae85, 0x3c6ef372, 0xa54ff53a,
      0x510e527f, 0x9b05688c, 0x1f83d9ab, 0x5be0cd19
    ];
    this.k = sha256_K;
    this.W = new Array(64);
  }
  utils$5.inherits(SHA256$1, BlockHash$2);
  var _256 = SHA256$1;

  SHA256$1.blockSize = 512;
  SHA256$1.outSize = 256;
  SHA256$1.hmacStrength = 192;
  SHA256$1.padLength = 64;

  SHA256$1.prototype._update = function _update(msg, start) {
    var W = this.W;

    for (var i = 0; i < 16; i++)
      W[i] = msg[start + i];
    for (; i < W.length; i++)
      W[i] = sum32_4$1(g1_256(W[i - 2]), W[i - 7], g0_256(W[i - 15]), W[i - 16]);

    var a = this.h[0];
    var b = this.h[1];
    var c = this.h[2];
    var d = this.h[3];
    var e = this.h[4];
    var f = this.h[5];
    var g = this.h[6];
    var h = this.h[7];

    assert$2(this.k.length === W.length);
    for (i = 0; i < W.length; i++) {
      var T1 = sum32_5(h, s1_256(e), ch32(e, f, g), this.k[i], W[i]);
      var T2 = sum32$1(s0_256(a), maj32(a, b, c));
      h = g;
      g = f;
      f = e;
      e = sum32$1(d, T1);
      d = c;
      c = b;
      b = a;
      a = sum32$1(T1, T2);
    }

    this.h[0] = sum32$1(this.h[0], a);
    this.h[1] = sum32$1(this.h[1], b);
    this.h[2] = sum32$1(this.h[2], c);
    this.h[3] = sum32$1(this.h[3], d);
    this.h[4] = sum32$1(this.h[4], e);
    this.h[5] = sum32$1(this.h[5], f);
    this.h[6] = sum32$1(this.h[6], g);
    this.h[7] = sum32$1(this.h[7], h);
  };

  SHA256$1.prototype._digest = function digest(enc) {
    if (enc === 'hex')
      return utils$5.toHex32(this.h, 'big');
    else
      return utils$5.split32(this.h, 'big');
  };

  var utils$4 = utils$9;
  var SHA256 = _256;

  function SHA224() {
    if (!(this instanceof SHA224))
      return new SHA224();

    SHA256.call(this);
    this.h = [
      0xc1059ed8, 0x367cd507, 0x3070dd17, 0xf70e5939,
      0xffc00b31, 0x68581511, 0x64f98fa7, 0xbefa4fa4 ];
  }
  utils$4.inherits(SHA224, SHA256);
  var _224 = SHA224;

  SHA224.blockSize = 512;
  SHA224.outSize = 224;
  SHA224.hmacStrength = 192;
  SHA224.padLength = 64;

  SHA224.prototype._digest = function digest(enc) {
    // Just truncate output
    if (enc === 'hex')
      return utils$4.toHex32(this.h.slice(0, 7), 'big');
    else
      return utils$4.split32(this.h.slice(0, 7), 'big');
  };

  var utils$3 = utils$9;
  var common$1 = common$5;
  var assert$1 = minimalisticAssert;

  var rotr64_hi = utils$3.rotr64_hi;
  var rotr64_lo = utils$3.rotr64_lo;
  var shr64_hi = utils$3.shr64_hi;
  var shr64_lo = utils$3.shr64_lo;
  var sum64 = utils$3.sum64;
  var sum64_hi = utils$3.sum64_hi;
  var sum64_lo = utils$3.sum64_lo;
  var sum64_4_hi = utils$3.sum64_4_hi;
  var sum64_4_lo = utils$3.sum64_4_lo;
  var sum64_5_hi = utils$3.sum64_5_hi;
  var sum64_5_lo = utils$3.sum64_5_lo;

  var BlockHash$1 = common$1.BlockHash;

  var sha512_K = [
    0x428a2f98, 0xd728ae22, 0x71374491, 0x23ef65cd,
    0xb5c0fbcf, 0xec4d3b2f, 0xe9b5dba5, 0x8189dbbc,
    0x3956c25b, 0xf348b538, 0x59f111f1, 0xb605d019,
    0x923f82a4, 0xaf194f9b, 0xab1c5ed5, 0xda6d8118,
    0xd807aa98, 0xa3030242, 0x12835b01, 0x45706fbe,
    0x243185be, 0x4ee4b28c, 0x550c7dc3, 0xd5ffb4e2,
    0x72be5d74, 0xf27b896f, 0x80deb1fe, 0x3b1696b1,
    0x9bdc06a7, 0x25c71235, 0xc19bf174, 0xcf692694,
    0xe49b69c1, 0x9ef14ad2, 0xefbe4786, 0x384f25e3,
    0x0fc19dc6, 0x8b8cd5b5, 0x240ca1cc, 0x77ac9c65,
    0x2de92c6f, 0x592b0275, 0x4a7484aa, 0x6ea6e483,
    0x5cb0a9dc, 0xbd41fbd4, 0x76f988da, 0x831153b5,
    0x983e5152, 0xee66dfab, 0xa831c66d, 0x2db43210,
    0xb00327c8, 0x98fb213f, 0xbf597fc7, 0xbeef0ee4,
    0xc6e00bf3, 0x3da88fc2, 0xd5a79147, 0x930aa725,
    0x06ca6351, 0xe003826f, 0x14292967, 0x0a0e6e70,
    0x27b70a85, 0x46d22ffc, 0x2e1b2138, 0x5c26c926,
    0x4d2c6dfc, 0x5ac42aed, 0x53380d13, 0x9d95b3df,
    0x650a7354, 0x8baf63de, 0x766a0abb, 0x3c77b2a8,
    0x81c2c92e, 0x47edaee6, 0x92722c85, 0x1482353b,
    0xa2bfe8a1, 0x4cf10364, 0xa81a664b, 0xbc423001,
    0xc24b8b70, 0xd0f89791, 0xc76c51a3, 0x0654be30,
    0xd192e819, 0xd6ef5218, 0xd6990624, 0x5565a910,
    0xf40e3585, 0x5771202a, 0x106aa070, 0x32bbd1b8,
    0x19a4c116, 0xb8d2d0c8, 0x1e376c08, 0x5141ab53,
    0x2748774c, 0xdf8eeb99, 0x34b0bcb5, 0xe19b48a8,
    0x391c0cb3, 0xc5c95a63, 0x4ed8aa4a, 0xe3418acb,
    0x5b9cca4f, 0x7763e373, 0x682e6ff3, 0xd6b2b8a3,
    0x748f82ee, 0x5defb2fc, 0x78a5636f, 0x43172f60,
    0x84c87814, 0xa1f0ab72, 0x8cc70208, 0x1a6439ec,
    0x90befffa, 0x23631e28, 0xa4506ceb, 0xde82bde9,
    0xbef9a3f7, 0xb2c67915, 0xc67178f2, 0xe372532b,
    0xca273ece, 0xea26619c, 0xd186b8c7, 0x21c0c207,
    0xeada7dd6, 0xcde0eb1e, 0xf57d4f7f, 0xee6ed178,
    0x06f067aa, 0x72176fba, 0x0a637dc5, 0xa2c898a6,
    0x113f9804, 0xbef90dae, 0x1b710b35, 0x131c471b,
    0x28db77f5, 0x23047d84, 0x32caab7b, 0x40c72493,
    0x3c9ebe0a, 0x15c9bebc, 0x431d67c4, 0x9c100d4c,
    0x4cc5d4be, 0xcb3e42b6, 0x597f299c, 0xfc657e2a,
    0x5fcb6fab, 0x3ad6faec, 0x6c44198c, 0x4a475817
  ];

  function SHA512$1() {
    if (!(this instanceof SHA512$1))
      return new SHA512$1();

    BlockHash$1.call(this);
    this.h = [
      0x6a09e667, 0xf3bcc908,
      0xbb67ae85, 0x84caa73b,
      0x3c6ef372, 0xfe94f82b,
      0xa54ff53a, 0x5f1d36f1,
      0x510e527f, 0xade682d1,
      0x9b05688c, 0x2b3e6c1f,
      0x1f83d9ab, 0xfb41bd6b,
      0x5be0cd19, 0x137e2179 ];
    this.k = sha512_K;
    this.W = new Array(160);
  }
  utils$3.inherits(SHA512$1, BlockHash$1);
  var _512 = SHA512$1;

  SHA512$1.blockSize = 1024;
  SHA512$1.outSize = 512;
  SHA512$1.hmacStrength = 192;
  SHA512$1.padLength = 128;

  SHA512$1.prototype._prepareBlock = function _prepareBlock(msg, start) {
    var W = this.W;

    // 32 x 32bit words
    for (var i = 0; i < 32; i++)
      W[i] = msg[start + i];
    for (; i < W.length; i += 2) {
      var c0_hi = g1_512_hi(W[i - 4], W[i - 3]);  // i - 2
      var c0_lo = g1_512_lo(W[i - 4], W[i - 3]);
      var c1_hi = W[i - 14];  // i - 7
      var c1_lo = W[i - 13];
      var c2_hi = g0_512_hi(W[i - 30], W[i - 29]);  // i - 15
      var c2_lo = g0_512_lo(W[i - 30], W[i - 29]);
      var c3_hi = W[i - 32];  // i - 16
      var c3_lo = W[i - 31];

      W[i] = sum64_4_hi(
        c0_hi, c0_lo,
        c1_hi, c1_lo,
        c2_hi, c2_lo,
        c3_hi, c3_lo);
      W[i + 1] = sum64_4_lo(
        c0_hi, c0_lo,
        c1_hi, c1_lo,
        c2_hi, c2_lo,
        c3_hi, c3_lo);
    }
  };

  SHA512$1.prototype._update = function _update(msg, start) {
    this._prepareBlock(msg, start);

    var W = this.W;

    var ah = this.h[0];
    var al = this.h[1];
    var bh = this.h[2];
    var bl = this.h[3];
    var ch = this.h[4];
    var cl = this.h[5];
    var dh = this.h[6];
    var dl = this.h[7];
    var eh = this.h[8];
    var el = this.h[9];
    var fh = this.h[10];
    var fl = this.h[11];
    var gh = this.h[12];
    var gl = this.h[13];
    var hh = this.h[14];
    var hl = this.h[15];

    assert$1(this.k.length === W.length);
    for (var i = 0; i < W.length; i += 2) {
      var c0_hi = hh;
      var c0_lo = hl;
      var c1_hi = s1_512_hi(eh, el);
      var c1_lo = s1_512_lo(eh, el);
      var c2_hi = ch64_hi(eh, el, fh, fl, gh);
      var c2_lo = ch64_lo(eh, el, fh, fl, gh, gl);
      var c3_hi = this.k[i];
      var c3_lo = this.k[i + 1];
      var c4_hi = W[i];
      var c4_lo = W[i + 1];

      var T1_hi = sum64_5_hi(
        c0_hi, c0_lo,
        c1_hi, c1_lo,
        c2_hi, c2_lo,
        c3_hi, c3_lo,
        c4_hi, c4_lo);
      var T1_lo = sum64_5_lo(
        c0_hi, c0_lo,
        c1_hi, c1_lo,
        c2_hi, c2_lo,
        c3_hi, c3_lo,
        c4_hi, c4_lo);

      c0_hi = s0_512_hi(ah, al);
      c0_lo = s0_512_lo(ah, al);
      c1_hi = maj64_hi(ah, al, bh, bl, ch);
      c1_lo = maj64_lo(ah, al, bh, bl, ch, cl);

      var T2_hi = sum64_hi(c0_hi, c0_lo, c1_hi, c1_lo);
      var T2_lo = sum64_lo(c0_hi, c0_lo, c1_hi, c1_lo);

      hh = gh;
      hl = gl;

      gh = fh;
      gl = fl;

      fh = eh;
      fl = el;

      eh = sum64_hi(dh, dl, T1_hi, T1_lo);
      el = sum64_lo(dl, dl, T1_hi, T1_lo);

      dh = ch;
      dl = cl;

      ch = bh;
      cl = bl;

      bh = ah;
      bl = al;

      ah = sum64_hi(T1_hi, T1_lo, T2_hi, T2_lo);
      al = sum64_lo(T1_hi, T1_lo, T2_hi, T2_lo);
    }

    sum64(this.h, 0, ah, al);
    sum64(this.h, 2, bh, bl);
    sum64(this.h, 4, ch, cl);
    sum64(this.h, 6, dh, dl);
    sum64(this.h, 8, eh, el);
    sum64(this.h, 10, fh, fl);
    sum64(this.h, 12, gh, gl);
    sum64(this.h, 14, hh, hl);
  };

  SHA512$1.prototype._digest = function digest(enc) {
    if (enc === 'hex')
      return utils$3.toHex32(this.h, 'big');
    else
      return utils$3.split32(this.h, 'big');
  };

  function ch64_hi(xh, xl, yh, yl, zh) {
    var r = (xh & yh) ^ ((~xh) & zh);
    if (r < 0)
      r += 0x100000000;
    return r;
  }

  function ch64_lo(xh, xl, yh, yl, zh, zl) {
    var r = (xl & yl) ^ ((~xl) & zl);
    if (r < 0)
      r += 0x100000000;
    return r;
  }

  function maj64_hi(xh, xl, yh, yl, zh) {
    var r = (xh & yh) ^ (xh & zh) ^ (yh & zh);
    if (r < 0)
      r += 0x100000000;
    return r;
  }

  function maj64_lo(xh, xl, yh, yl, zh, zl) {
    var r = (xl & yl) ^ (xl & zl) ^ (yl & zl);
    if (r < 0)
      r += 0x100000000;
    return r;
  }

  function s0_512_hi(xh, xl) {
    var c0_hi = rotr64_hi(xh, xl, 28);
    var c1_hi = rotr64_hi(xl, xh, 2);  // 34
    var c2_hi = rotr64_hi(xl, xh, 7);  // 39

    var r = c0_hi ^ c1_hi ^ c2_hi;
    if (r < 0)
      r += 0x100000000;
    return r;
  }

  function s0_512_lo(xh, xl) {
    var c0_lo = rotr64_lo(xh, xl, 28);
    var c1_lo = rotr64_lo(xl, xh, 2);  // 34
    var c2_lo = rotr64_lo(xl, xh, 7);  // 39

    var r = c0_lo ^ c1_lo ^ c2_lo;
    if (r < 0)
      r += 0x100000000;
    return r;
  }

  function s1_512_hi(xh, xl) {
    var c0_hi = rotr64_hi(xh, xl, 14);
    var c1_hi = rotr64_hi(xh, xl, 18);
    var c2_hi = rotr64_hi(xl, xh, 9);  // 41

    var r = c0_hi ^ c1_hi ^ c2_hi;
    if (r < 0)
      r += 0x100000000;
    return r;
  }

  function s1_512_lo(xh, xl) {
    var c0_lo = rotr64_lo(xh, xl, 14);
    var c1_lo = rotr64_lo(xh, xl, 18);
    var c2_lo = rotr64_lo(xl, xh, 9);  // 41

    var r = c0_lo ^ c1_lo ^ c2_lo;
    if (r < 0)
      r += 0x100000000;
    return r;
  }

  function g0_512_hi(xh, xl) {
    var c0_hi = rotr64_hi(xh, xl, 1);
    var c1_hi = rotr64_hi(xh, xl, 8);
    var c2_hi = shr64_hi(xh, xl, 7);

    var r = c0_hi ^ c1_hi ^ c2_hi;
    if (r < 0)
      r += 0x100000000;
    return r;
  }

  function g0_512_lo(xh, xl) {
    var c0_lo = rotr64_lo(xh, xl, 1);
    var c1_lo = rotr64_lo(xh, xl, 8);
    var c2_lo = shr64_lo(xh, xl, 7);

    var r = c0_lo ^ c1_lo ^ c2_lo;
    if (r < 0)
      r += 0x100000000;
    return r;
  }

  function g1_512_hi(xh, xl) {
    var c0_hi = rotr64_hi(xh, xl, 19);
    var c1_hi = rotr64_hi(xl, xh, 29);  // 61
    var c2_hi = shr64_hi(xh, xl, 6);

    var r = c0_hi ^ c1_hi ^ c2_hi;
    if (r < 0)
      r += 0x100000000;
    return r;
  }

  function g1_512_lo(xh, xl) {
    var c0_lo = rotr64_lo(xh, xl, 19);
    var c1_lo = rotr64_lo(xl, xh, 29);  // 61
    var c2_lo = shr64_lo(xh, xl, 6);

    var r = c0_lo ^ c1_lo ^ c2_lo;
    if (r < 0)
      r += 0x100000000;
    return r;
  }

  var utils$2 = utils$9;

  var SHA512 = _512;

  function SHA384() {
    if (!(this instanceof SHA384))
      return new SHA384();

    SHA512.call(this);
    this.h = [
      0xcbbb9d5d, 0xc1059ed8,
      0x629a292a, 0x367cd507,
      0x9159015a, 0x3070dd17,
      0x152fecd8, 0xf70e5939,
      0x67332667, 0xffc00b31,
      0x8eb44a87, 0x68581511,
      0xdb0c2e0d, 0x64f98fa7,
      0x47b5481d, 0xbefa4fa4 ];
  }
  utils$2.inherits(SHA384, SHA512);
  var _384 = SHA384;

  SHA384.blockSize = 1024;
  SHA384.outSize = 384;
  SHA384.hmacStrength = 192;
  SHA384.padLength = 128;

  SHA384.prototype._digest = function digest(enc) {
    if (enc === 'hex')
      return utils$2.toHex32(this.h.slice(0, 12), 'big');
    else
      return utils$2.split32(this.h.slice(0, 12), 'big');
  };

  sha.sha1 = _1;
  sha.sha224 = _224;
  sha.sha256 = _256;
  sha.sha384 = _384;
  sha.sha512 = _512;

  var ripemd$1 = {};

  var utils$1 = utils$9;
  var common = common$5;

  var rotl32 = utils$1.rotl32;
  var sum32 = utils$1.sum32;
  var sum32_3 = utils$1.sum32_3;
  var sum32_4 = utils$1.sum32_4;
  var BlockHash = common.BlockHash;

  function RIPEMD160$1() {
    if (!(this instanceof RIPEMD160$1))
      return new RIPEMD160$1();

    BlockHash.call(this);

    this.h = [ 0x67452301, 0xefcdab89, 0x98badcfe, 0x10325476, 0xc3d2e1f0 ];
    this.endian = 'little';
  }
  utils$1.inherits(RIPEMD160$1, BlockHash);
  ripemd$1.ripemd160 = RIPEMD160$1;

  RIPEMD160$1.blockSize = 512;
  RIPEMD160$1.outSize = 160;
  RIPEMD160$1.hmacStrength = 192;
  RIPEMD160$1.padLength = 64;

  RIPEMD160$1.prototype._update = function update(msg, start) {
    var A = this.h[0];
    var B = this.h[1];
    var C = this.h[2];
    var D = this.h[3];
    var E = this.h[4];
    var Ah = A;
    var Bh = B;
    var Ch = C;
    var Dh = D;
    var Eh = E;
    for (var j = 0; j < 80; j++) {
      var T = sum32(
        rotl32(
          sum32_4(A, f(j, B, C, D), msg[r[j] + start], K(j)),
          s[j]),
        E);
      A = E;
      E = D;
      D = rotl32(C, 10);
      C = B;
      B = T;
      T = sum32(
        rotl32(
          sum32_4(Ah, f(79 - j, Bh, Ch, Dh), msg[rh[j] + start], Kh(j)),
          sh[j]),
        Eh);
      Ah = Eh;
      Eh = Dh;
      Dh = rotl32(Ch, 10);
      Ch = Bh;
      Bh = T;
    }
    T = sum32_3(this.h[1], C, Dh);
    this.h[1] = sum32_3(this.h[2], D, Eh);
    this.h[2] = sum32_3(this.h[3], E, Ah);
    this.h[3] = sum32_3(this.h[4], A, Bh);
    this.h[4] = sum32_3(this.h[0], B, Ch);
    this.h[0] = T;
  };

  RIPEMD160$1.prototype._digest = function digest(enc) {
    if (enc === 'hex')
      return utils$1.toHex32(this.h, 'little');
    else
      return utils$1.split32(this.h, 'little');
  };

  function f(j, x, y, z) {
    if (j <= 15)
      return x ^ y ^ z;
    else if (j <= 31)
      return (x & y) | ((~x) & z);
    else if (j <= 47)
      return (x | (~y)) ^ z;
    else if (j <= 63)
      return (x & z) | (y & (~z));
    else
      return x ^ (y | (~z));
  }

  function K(j) {
    if (j <= 15)
      return 0x00000000;
    else if (j <= 31)
      return 0x5a827999;
    else if (j <= 47)
      return 0x6ed9eba1;
    else if (j <= 63)
      return 0x8f1bbcdc;
    else
      return 0xa953fd4e;
  }

  function Kh(j) {
    if (j <= 15)
      return 0x50a28be6;
    else if (j <= 31)
      return 0x5c4dd124;
    else if (j <= 47)
      return 0x6d703ef3;
    else if (j <= 63)
      return 0x7a6d76e9;
    else
      return 0x00000000;
  }

  var r = [
    0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,
    7, 4, 13, 1, 10, 6, 15, 3, 12, 0, 9, 5, 2, 14, 11, 8,
    3, 10, 14, 4, 9, 15, 8, 1, 2, 7, 0, 6, 13, 11, 5, 12,
    1, 9, 11, 10, 0, 8, 12, 4, 13, 3, 7, 15, 14, 5, 6, 2,
    4, 0, 5, 9, 7, 12, 2, 10, 14, 1, 3, 8, 11, 6, 15, 13
  ];

  var rh = [
    5, 14, 7, 0, 9, 2, 11, 4, 13, 6, 15, 8, 1, 10, 3, 12,
    6, 11, 3, 7, 0, 13, 5, 10, 14, 15, 8, 12, 4, 9, 1, 2,
    15, 5, 1, 3, 7, 14, 6, 9, 11, 8, 12, 2, 10, 0, 4, 13,
    8, 6, 4, 1, 3, 11, 15, 0, 5, 12, 2, 13, 9, 7, 10, 14,
    12, 15, 10, 4, 1, 5, 8, 7, 6, 2, 13, 14, 0, 3, 9, 11
  ];

  var s = [
    11, 14, 15, 12, 5, 8, 7, 9, 11, 13, 14, 15, 6, 7, 9, 8,
    7, 6, 8, 13, 11, 9, 7, 15, 7, 12, 15, 9, 11, 7, 13, 12,
    11, 13, 6, 7, 14, 9, 13, 15, 14, 8, 13, 6, 5, 12, 7, 5,
    11, 12, 14, 15, 14, 15, 9, 8, 9, 14, 5, 6, 8, 6, 5, 12,
    9, 15, 5, 11, 6, 8, 13, 12, 5, 12, 13, 14, 11, 8, 5, 6
  ];

  var sh = [
    8, 9, 9, 11, 13, 15, 15, 5, 7, 7, 8, 11, 14, 14, 12, 6,
    9, 13, 15, 7, 12, 8, 9, 11, 7, 7, 12, 7, 6, 15, 13, 11,
    9, 7, 15, 11, 8, 6, 6, 14, 12, 13, 5, 14, 13, 13, 7, 5,
    15, 5, 8, 11, 14, 14, 6, 14, 6, 9, 12, 9, 12, 5, 15, 8,
    8, 5, 12, 9, 12, 5, 14, 6, 8, 13, 6, 5, 15, 13, 11, 11
  ];

  var utils = utils$9;
  var assert = minimalisticAssert;

  function Hmac(hash, key, enc) {
    if (!(this instanceof Hmac))
      return new Hmac(hash, key, enc);
    this.Hash = hash;
    this.blockSize = hash.blockSize / 8;
    this.outSize = hash.outSize / 8;
    this.inner = null;
    this.outer = null;

    this._init(utils.toArray(key, enc));
  }
  var hmac = Hmac;

  Hmac.prototype._init = function init(key) {
    // Shorten key, if needed
    if (key.length > this.blockSize)
      key = new this.Hash().update(key).digest();
    assert(key.length <= this.blockSize);

    // Add padding to key
    for (var i = key.length; i < this.blockSize; i++)
      key.push(0);

    for (i = 0; i < key.length; i++)
      key[i] ^= 0x36;
    this.inner = new this.Hash().update(key);

    // 0x36 ^ 0x5c = 0x6a
    for (i = 0; i < key.length; i++)
      key[i] ^= 0x6a;
    this.outer = new this.Hash().update(key);
  };

  Hmac.prototype.update = function update(msg, enc) {
    this.inner.update(msg, enc);
    return this;
  };

  Hmac.prototype.digest = function digest(enc) {
    this.outer.update(this.inner.digest());
    return this.outer.digest(enc);
  };

  (function (exports) {
  var hash = exports;

  hash.utils = utils$9;
  hash.common = common$5;
  hash.sha = sha;
  hash.ripemd = ripemd$1;
  hash.hmac = hmac;

  // Proxy hash functions to the main object
  hash.sha1 = hash.sha.sha1;
  hash.sha256 = hash.sha.sha256;
  hash.sha224 = hash.sha.sha224;
  hash.sha384 = hash.sha.sha384;
  hash.sha512 = hash.sha.sha512;
  hash.ripemd160 = hash.ripemd.ripemd160;
  }(hash));

  var _slicedToArray = function () { function sliceIterator(arr, i) { var _arr = []; var _n = true; var _d = false; var _e = undefined; try { for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"]) _i["return"](); } finally { if (_d) throw _e; } } return _arr; } return function (arr, i) { if (Array.isArray(arr)) { return arr; } else if (Symbol.iterator in Object(arr)) { return sliceIterator(arr, i); } else { throw new TypeError("Invalid attempt to destructure non-iterable instance"); } }; }();

  var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var RIPEMD160 = function () {
      function RIPEMD160() {
          // https://webcache.googleusercontent.com/search?q=cache:CnLOgolTHYEJ:https://www.cosic.esat.kuleuven.be/publications/article-317.pdf
          // http://shodhganga.inflibnet.ac.in/bitstream/10603/22978/13/13_appendix.pdf

          _classCallCheck(this, RIPEMD160);
      }

      _createClass(RIPEMD160, null, [{
          key: "get_n_pad_bytes",
          value: function get_n_pad_bytes(message_size /* in bytes, 1 byte is 8 bits. */) {
              //  Obtain the number of bytes needed to pad the message.
              // It does not contain the size of the message size information.
              /*
             https://webcache.googleusercontent.com/search?q=cache:CnLOgolTHYEJ:https://www.cosic.esat.kuleuven.be/publications/article-317.pdf
               The Cryptographic Hash Function RIPEMD-160
               written by
               Bart Preneel,
               Hans Dobbertin,
               Antoon Bosselaers
             in
               1997.
               --------------------------------------------------
               §5     Description of RIPEMD-160
               ......
                In order to guarantee that the total input size is a
             multiple of 512 bits, the input is padded in the same
             way as for all the members of the MD4-family: one
             appends a single 1 followed by a string of 0s (the
             number of 0s lies between 0 and 511); the last 64 bits
             of the extended input contain the binary representation
             of the input size in bits, least significant byte first.
           */
              /*
             https://tools.ietf.org/rfc/rfc1186.txt
               RFC 1186: MD4 Message Digest Algorithm.
               written by
               Ronald Linn Rivest
             in
               October 1990.
               --------------------------------------------------
               §3     MD4 Algorithm Description
               ......
               Step 1. Append padding bits
                The message is "padded" (extended) so that its length
             (in bits) is congruent to 448, modulo 512. That is, the
             message is extended so that it is just 64 bits shy of
             being a multiple of 512 bits long. Padding is always
             performed, even if the length of the message is already
             congruent to 448, modulo 512 (in which case 512 bits of
             padding are added).
                Padding is performed as follows: a single "1" bit is
             appended to the message, and then enough zero bits are
             appended so that the length in bits of the padded
             message becomes congruent to 448, modulo 512.
               Step 2. Append length
                A 64-bit representation of b (the length of the message
             before the padding bits were added) is appended to the
             result of the previous step. In the unlikely event that
             b is greater than 2^64, then only the low-order 64 bits
             of b are used. (These bits are appended as two 32-bit
             words and appended low-order word first in accordance
             with the previous conventions.)
                At this point the resulting message (after padding with
             bits and with b) has a length that is an exact multiple
             of 512 bits. Equivalently, this message has a length
             that is an exact multiple of 16 (32-bit) words. Let
             M[0 ... N-1] denote the words of the resulting message,
             where N is a multiple of 16.
           */
              // https://crypto.stackexchange.com/a/32407/54568
              /*
             Example case  # 1
               [0 bit: message.]
               [1 bit: 1.]
               [447 bits: 0.]
               [64 bits: message size information.]
               Example case  # 2
               [512-bits: message]
               [1 bit: 1.]
               [447 bits: 0.]
               [64 bits: message size information.]
               Example case  # 3
               [(512 - 64 = 448) bits: message.]
               [1 bit: 1.]
               [511 bits: 0.]
               [64 bits: message size information.]
               Example case  # 4
               [(512 - 65 = 447) bits: message.]
               [1 bit: 1.]
               [0 bit: 0.]
               [64 bits: message size information.]
           */
              // The number of padding zero bits:
              //      511 - [{(message size in bits) + 64} (mod 512)]
              return 64 - (message_size + 8 & 63 /* 63 */);
          }
      }, {
          key: "pad",
          value: function pad(message /* An ArrayBuffer. */) {
              var message_size = message.byteLength;
              var n_pad = RIPEMD160.get_n_pad_bytes(message_size);

              //  `Number.MAX_SAFE_INTEGER` is ((2 ** 53) - 1) and
              // bitwise operation in Javascript is done on 32-bits operands.
              var divmod = function divmod(dividend, divisor) {
                  return [Math.floor(dividend / divisor), dividend % divisor];
              };
              /*
           To shift
             00000000 000????? ???????? ???????? ???????? ???????? ???????? ????????
                                              t o
            00000000 ???????? ???????? ???????? ???????? ???????? ???????? ?????000
           --------------------------------------------------------------------------------
           Method #1
              00000000 000????? ???????? ????????  ???????? ???????? ???????? ????????
            [00000000 000AAAAA AAAAAAAA AAAAAAAA] (<A> captured)
            [00000000 AAAAAAAA AAAAAAAA AAAAA000] (<A> shifted)
                                  (<B> captured) [BBBBBBBB BBBBBBBB BBBBBBBB BBBBBBBB]
                              (<B> shifted) [BBB][BBBBBBBB BBBBBBBB BBBBBBBB BBBBB000]
            [00000000 AAAAAAAA AAAAAAAA AAAAABBB] (<A> & <B_2> merged)
            [00000000 AAAAAAAA AAAAAAAA AAAAABBB][BBBBBBBB BBBBBBBB BBBBBBBB BBBBB000]
             00000000 ???????? ???????? ????????  ???????? ???????? ???????? ?????000
             const uint32_max_plus_1 = 0x100000000; // (2 ** 32)
           const [
             msg_byte_size_most, // Value range [0, (2 ** 21) - 1].
             msg_byte_size_least // Value range [0, (2 ** 32) - 1].
           ] = divmod(message_size, uint32_max_plus_1);
           const [
             carry, // Value range [0, 7].
             msg_bit_size_least // Value range [0, (2 ** 32) - 8].
           ] = divmod(message_byte_size_least * 8, uint32_max_plus_1);
           const message_bit_size_most = message_byte_size_most * 8
             + carry; // Value range [0, (2 ** 24) - 1].
           --------------------------------------------------------------------------------
           Method #2
             00000000 000????? ???????? ????????  ???????? ???????? ???????? ????????
               [00000 000AAAAA AAAAAAAA AAAAAAAA  AAA] (<A> captured)
                                  (<B> captured) [000BBBBB BBBBBBBB BBBBBBBB BBBBBBBB]
                                   (<B> shifted) [BBBBBBBB BBBBBBBB BBBBBBBB BBBBB000]
            [00000000 AAAAAAAA AAAAAAAA AAAAAAAA][BBBBBBBB BBBBBBBB BBBBBBBB BBBBB000]
             00000000 ???????? ???????? ????????  ???????? ???????? ???????? ?????000
             */

              var _divmod$map = divmod(message_size, 536870912 /* (2 ** 29) */).map(function (x, index) {
                    return index ? x * 8 : x;
                }),
                _divmod$map2 = _slicedToArray(_divmod$map, 2),
                msg_bit_size_most = _divmod$map2[0],
                msg_bit_size_least = _divmod$map2[1];

              // `ArrayBuffer.transfer()` is not supported.


              var padded = new Uint8Array(message_size + n_pad + 8);
              padded.set(new Uint8Array(message), 0);
              var data_view = new DataView(padded.buffer);
              data_view.setUint8(message_size, 128);
              data_view.setUint32(message_size + n_pad, msg_bit_size_least, true // Little-endian
              );
              data_view.setUint32(message_size + n_pad + 4, msg_bit_size_most, true // Little-endian
              );

              return padded.buffer;
          }
      }, {
          key: "f",
          value: function f(j, x, y, z) {
              if (0 <= j && j <= 15) {
                  // Exclusive-OR
                  return x ^ y ^ z;
              }
              if (16 <= j && j <= 31) {
                  // Multiplexing (muxing)
                  return x & y | ~x & z;
              }
              if (32 <= j && j <= 47) {
                  return (x | ~y) ^ z;
              }
              if (48 <= j && j <= 63) {
                  // Multiplexing (muxing)
                  return x & z | y & ~z;
              }
              if (64 <= j && j <= 79) {
                  return x ^ (y | ~z);
              }
          }
      }, {
          key: "K",
          value: function K(j) {
              if (0 <= j && j <= 15) {
                  return 0x00000000;
              }
              if (16 <= j && j <= 31) {
                  // Math.floor((2 ** 30) * Math.SQRT2)
                  return 0x5A827999;
              }
              if (32 <= j && j <= 47) {
                  // Math.floor((2 ** 30) * Math.sqrt(3))
                  return 0x6ED9EBA1;
              }
              if (48 <= j && j <= 63) {
                  // Math.floor((2 ** 30) * Math.sqrt(5))
                  return 0x8F1BBCDC;
              }
              if (64 <= j && j <= 79) {
                  // Math.floor((2 ** 30) * Math.sqrt(7))
                  return 0xA953FD4E;
              }
          }
      }, {
          key: "KP",
          value: function KP(j) // K'
          {
              if (0 <= j && j <= 15) {
                  // Math.floor((2 ** 30) * Math.cbrt(2))
                  return 0x50A28BE6;
              }
              if (16 <= j && j <= 31) {
                  // Math.floor((2 ** 30) * Math.cbrt(3))
                  return 0x5C4DD124;
              }
              if (32 <= j && j <= 47) {
                  // Math.floor((2 ** 30) * Math.cbrt(5))
                  return 0x6D703EF3;
              }
              if (48 <= j && j <= 63) {
                  // Math.floor((2 ** 30) * Math.cbrt(7))
                  return 0x7A6D76E9;
              }
              if (64 <= j && j <= 79) {
                  return 0x00000000;
              }
          }
      }, {
          key: "add_modulo32",
          value: function add_modulo32() /* ...... */{
              // 1.  Modulo addition (addition modulo) is associative.
              //    https://proofwiki.org/wiki/Modulo_Addition_is_Associative
              // 2.  Bitwise operation in Javascript
              //    is done on 32-bits operands
              //    and results in a 32-bits value.
              return Array.from(arguments).reduce(function (a, b) {
                  return a + b;
              }, 0) | 0;
          }
      }, {
          key: "rol32",
          value: function rol32(value, count) {
              // Cyclic left shift (rotate) on 32-bits value.
              return value << count | value >>> 32 - count;
          }
      }, {
          key: "hash",
          value: function hash(message /* An ArrayBuffer. */) {
              //////////       Padding       //////////

              // The padded message.
              var padded = RIPEMD160.pad(message);

              //////////     Compression     //////////

              // Message word selectors.
              var r = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 7, 4, 13, 1, 10, 6, 15, 3, 12, 0, 9, 5, 2, 14, 11, 8, 3, 10, 14, 4, 9, 15, 8, 1, 2, 7, 0, 6, 13, 11, 5, 12, 1, 9, 11, 10, 0, 8, 12, 4, 13, 3, 7, 15, 14, 5, 6, 2, 4, 0, 5, 9, 7, 12, 2, 10, 14, 1, 3, 8, 11, 6, 15, 13];
              var rP = [// r'
                  5, 14, 7, 0, 9, 2, 11, 4, 13, 6, 15, 8, 1, 10, 3, 12, 6, 11, 3, 7, 0, 13, 5, 10, 14, 15, 8, 12, 4, 9, 1, 2, 15, 5, 1, 3, 7, 14, 6, 9, 11, 8, 12, 2, 10, 0, 4, 13, 8, 6, 4, 1, 3, 11, 15, 0, 5, 12, 2, 13, 9, 7, 10, 14, 12, 15, 10, 4, 1, 5, 8, 7, 6, 2, 13, 14, 0, 3, 9, 11];

              // Amounts for 'rotate left' operation.
              var s = [11, 14, 15, 12, 5, 8, 7, 9, 11, 13, 14, 15, 6, 7, 9, 8, 7, 6, 8, 13, 11, 9, 7, 15, 7, 12, 15, 9, 11, 7, 13, 12, 11, 13, 6, 7, 14, 9, 13, 15, 14, 8, 13, 6, 5, 12, 7, 5, 11, 12, 14, 15, 14, 15, 9, 8, 9, 14, 5, 6, 8, 6, 5, 12, 9, 15, 5, 11, 6, 8, 13, 12, 5, 12, 13, 14, 11, 8, 5, 6];
              var sP = [// s'
                  8, 9, 9, 11, 13, 15, 15, 5, 7, 7, 8, 11, 14, 14, 12, 6, 9, 13, 15, 7, 12, 8, 9, 11, 7, 7, 12, 7, 6, 15, 13, 11, 9, 7, 15, 11, 8, 6, 6, 14, 12, 13, 5, 14, 13, 13, 7, 5, 15, 5, 8, 11, 14, 14, 6, 14, 6, 9, 12, 9, 12, 5, 15, 8, 8, 5, 12, 9, 12, 5, 14, 6, 8, 13, 6, 5, 15, 13, 11, 11];

              // The size, in bytes, of a word.
              var word_size = 4;

              // The size, in bytes, of a 16-words block.
              var block_size = 64;

              // The number of the 16-words blocks.
              var t = padded.byteLength / block_size;

              //  The message after padding consists of t 16-word blocks that
              // are denoted with X_i[j], with 0≤i≤(t − 1) and 0≤j≤15.
              var X = new Array(t).fill(undefined).map(function (_, i) {
                  return function (j) {
                      return new DataView(padded, i * block_size, block_size).getUint32(j * word_size, true // Little-endian
                      );
                  };
              });

              //  The result of RIPEMD-160 is contained in five 32-bit words,
              // which form the internal state of the algorithm. The final
              // content of these five 32-bit words is converted to a 160-bit
              // string, again using the little-endian convention.
              var h = [0x67452301, // h_0
                  0xEFCDAB89, // h_1
                  0x98BADCFE, // h_2
                  0x10325476, // h_3
                  0xC3D2E1F0 // h_4
              ];

              for (var i = 0; i < t; ++i) {
                  var A = h[0],
                    B = h[1],
                    C = h[2],
                    D = h[3],
                    E = h[4];
                  var AP = A,
                    BP = B,
                    CP = C,
                    DP = D,
                    EP = E;
                  for (var j = 0; j < 80; ++j) {
                      // Left rounds
                      var _T = RIPEMD160.add_modulo32(RIPEMD160.rol32(RIPEMD160.add_modulo32(A, RIPEMD160.f(j, B, C, D), X[i](r[j]), RIPEMD160.K(j)), s[j]), E);
                      A = E;
                      E = D;
                      D = RIPEMD160.rol32(C, 10);
                      C = B;
                      B = _T;

                      // Right rounds
                      _T = RIPEMD160.add_modulo32(RIPEMD160.rol32(RIPEMD160.add_modulo32(AP, RIPEMD160.f(79 - j, BP, CP, DP), X[i](rP[j]), RIPEMD160.KP(j)), sP[j]), EP);
                      AP = EP;
                      EP = DP;
                      DP = RIPEMD160.rol32(CP, 10);
                      CP = BP;
                      BP = _T;
                  }
                  var T = RIPEMD160.add_modulo32(h[1], C, DP);
                  h[1] = RIPEMD160.add_modulo32(h[2], D, EP);
                  h[2] = RIPEMD160.add_modulo32(h[3], E, AP);
                  h[3] = RIPEMD160.add_modulo32(h[4], A, BP);
                  h[4] = RIPEMD160.add_modulo32(h[0], B, CP);
                  h[0] = T;
              }

              //  The final output string then consists of the concatenatation
              // of h_0, h_1, h_2, h_3, and h_4 after converting each h_i to a
              // 4-byte string using the little-endian convention.
              var result = new ArrayBuffer(20);
              var data_view = new DataView(result);
              h.forEach(function (h_i, i) {
                  return data_view.setUint32(i * 4, h_i, true);
              });
              return result;
          }
      }]);

      return RIPEMD160;
  }();

  var ripemd = {
      RIPEMD160: RIPEMD160
  };

  (function (exports) {
  var __read = (commonjsGlobal && commonjsGlobal.__read) || function (o, n) {
      var m = typeof Symbol === "function" && o[Symbol.iterator];
      if (!m) return o;
      var i = m.call(o), r, ar = [], e;
      try {
          while ((n === void 0 || n-- > 0) && !(r = i.next()).done) ar.push(r.value);
      }
      catch (error) { e = { error: error }; }
      finally {
          try {
              if (r && !r.done && (m = i["return"])) m.call(i);
          }
          finally { if (e) throw e.error; }
      }
      return ar;
  };
  var __spreadArray = (commonjsGlobal && commonjsGlobal.__spreadArray) || function (to, from) {
      for (var i = 0, il = from.length, j = to.length; i < il; i++, j++)
          to[j] = from[i];
      return to;
  };
  var __values = (commonjsGlobal && commonjsGlobal.__values) || function(o) {
      var s = typeof Symbol === "function" && Symbol.iterator, m = s && o[s], i = 0;
      if (m) return m.call(o);
      if (o && typeof o.length === "number") return {
          next: function () {
              if (o && i >= o.length) o = void 0;
              return { value: o && o[i++], done: !o };
          }
      };
      throw new TypeError(s ? "Object is not iterable." : "Symbol.iterator is not defined.");
  };
  Object.defineProperty(exports, "__esModule", { value: true });
  exports.signatureToString = exports.stringToSignature = exports.privateKeyToString = exports.privateKeyToLegacyString = exports.stringToPrivateKey = exports.convertLegacyPublicKeys = exports.convertLegacyPublicKey = exports.publicKeyToString = exports.publicKeyToLegacyString = exports.stringToPublicKey = exports.signatureDataSize = exports.privateKeyDataSize = exports.publicKeyDataSize = exports.KeyType = exports.base64ToBinary = exports.binaryToBase58 = exports.base58ToBinary = exports.signedBinaryToDecimal = exports.binaryToDecimal = exports.signedDecimalToBinary = exports.decimalToBinary = exports.negate = exports.isNegative = void 0;
  /**
   * @module Numeric
   */
  var hash_js_1 = hash;
  // copyright defined in eosjs/LICENSE.txt
  var ripemd160 = ripemd.RIPEMD160.hash;
  var base58Chars = '123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz';
  var base64Chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
  var create_base58_map = function () {
      var base58M = Array(256).fill(-1);
      for (var i = 0; i < base58Chars.length; ++i) {
          base58M[base58Chars.charCodeAt(i)] = i;
      }
      return base58M;
  };
  var base58Map = create_base58_map();
  var create_base64_map = function () {
      var base64M = Array(256).fill(-1);
      for (var i = 0; i < base64Chars.length; ++i) {
          base64M[base64Chars.charCodeAt(i)] = i;
      }
      base64M['='.charCodeAt(0)] = 0;
      return base64M;
  };
  var base64Map = create_base64_map();
  /** Is `bignum` a negative number? */
  var isNegative = function (bignum) {
      return (bignum[bignum.length - 1] & 0x80) !== 0;
  };
  exports.isNegative = isNegative;
  /** Negate `bignum` */
  var negate = function (bignum) {
      var carry = 1;
      for (var i = 0; i < bignum.length; ++i) {
          var x = (~bignum[i] & 0xff) + carry;
          bignum[i] = x;
          carry = x >> 8;
      }
  };
  exports.negate = negate;
  /**
   * Convert an unsigned decimal number in `s` to a bignum
   *
   * @param size bignum size (bytes)
   */
  var decimalToBinary = function (size, s) {
      var result = new Uint8Array(size);
      for (var i = 0; i < s.length; ++i) {
          var srcDigit = s.charCodeAt(i);
          if (srcDigit < '0'.charCodeAt(0) || srcDigit > '9'.charCodeAt(0)) {
              throw new Error('invalid number');
          }
          var carry = srcDigit - '0'.charCodeAt(0);
          for (var j = 0; j < size; ++j) {
              var x = result[j] * 10 + carry;
              result[j] = x;
              carry = x >> 8;
          }
          if (carry) {
              throw new Error('number is out of range');
          }
      }
      return result;
  };
  exports.decimalToBinary = decimalToBinary;
  /**
   * Convert a signed decimal number in `s` to a bignum
   *
   * @param size bignum size (bytes)
   */
  var signedDecimalToBinary = function (size, s) {
      var negative = s[0] === '-';
      if (negative) {
          s = s.substr(1);
      }
      var result = exports.decimalToBinary(size, s);
      if (negative) {
          exports.negate(result);
          if (!exports.isNegative(result)) {
              throw new Error('number is out of range');
          }
      }
      else if (exports.isNegative(result)) {
          throw new Error('number is out of range');
      }
      return result;
  };
  exports.signedDecimalToBinary = signedDecimalToBinary;
  /**
   * Convert `bignum` to an unsigned decimal number
   *
   * @param minDigits 0-pad result to this many digits
   */
  var binaryToDecimal = function (bignum, minDigits) {
      if (minDigits === void 0) { minDigits = 1; }
      var result = Array(minDigits).fill('0'.charCodeAt(0));
      for (var i = bignum.length - 1; i >= 0; --i) {
          var carry = bignum[i];
          for (var j = 0; j < result.length; ++j) {
              var x = ((result[j] - '0'.charCodeAt(0)) << 8) + carry;
              result[j] = '0'.charCodeAt(0) + x % 10;
              carry = (x / 10) | 0;
          }
          while (carry) {
              result.push('0'.charCodeAt(0) + carry % 10);
              carry = (carry / 10) | 0;
          }
      }
      result.reverse();
      return String.fromCharCode.apply(String, __spreadArray([], __read(result)));
  };
  exports.binaryToDecimal = binaryToDecimal;
  /**
   * Convert `bignum` to a signed decimal number
   *
   * @param minDigits 0-pad result to this many digits
   */
  var signedBinaryToDecimal = function (bignum, minDigits) {
      if (minDigits === void 0) { minDigits = 1; }
      if (exports.isNegative(bignum)) {
          var x = bignum.slice();
          exports.negate(x);
          return '-' + exports.binaryToDecimal(x, minDigits);
      }
      return exports.binaryToDecimal(bignum, minDigits);
  };
  exports.signedBinaryToDecimal = signedBinaryToDecimal;
  var base58ToBinaryVarSize = function (s) {
      var e_1, _a;
      var result = [];
      for (var i = 0; i < s.length; ++i) {
          var carry = base58Map[s.charCodeAt(i)];
          if (carry < 0) {
              throw new Error('invalid base-58 value');
          }
          for (var j = 0; j < result.length; ++j) {
              var x = result[j] * 58 + carry;
              result[j] = x & 0xff;
              carry = x >> 8;
          }
          if (carry) {
              result.push(carry);
          }
      }
      try {
          for (var s_1 = __values(s), s_1_1 = s_1.next(); !s_1_1.done; s_1_1 = s_1.next()) {
              var ch = s_1_1.value;
              if (ch === '1') {
                  result.push(0);
              }
              else {
                  break;
              }
          }
      }
      catch (e_1_1) { e_1 = { error: e_1_1 }; }
      finally {
          try {
              if (s_1_1 && !s_1_1.done && (_a = s_1.return)) _a.call(s_1);
          }
          finally { if (e_1) throw e_1.error; }
      }
      result.reverse();
      return new Uint8Array(result);
  };
  /**
   * Convert an unsigned base-58 number in `s` to a bignum
   *
   * @param size bignum size (bytes)
   */
  var base58ToBinary = function (size, s) {
      if (!size) {
          return base58ToBinaryVarSize(s);
      }
      var result = new Uint8Array(size);
      for (var i = 0; i < s.length; ++i) {
          var carry = base58Map[s.charCodeAt(i)];
          if (carry < 0) {
              throw new Error('invalid base-58 value');
          }
          for (var j = 0; j < size; ++j) {
              var x = result[j] * 58 + carry;
              result[j] = x;
              carry = x >> 8;
          }
          if (carry) {
              throw new Error('base-58 value is out of range');
          }
      }
      result.reverse();
      return result;
  };
  exports.base58ToBinary = base58ToBinary;
  /**
   * Convert `bignum` to a base-58 number
   *
   * @param minDigits 0-pad result to this many digits
   */
  var binaryToBase58 = function (bignum, minDigits) {
      var e_2, _a, e_3, _b;
      var result = [];
      try {
          for (var bignum_1 = __values(bignum), bignum_1_1 = bignum_1.next(); !bignum_1_1.done; bignum_1_1 = bignum_1.next()) {
              var byte = bignum_1_1.value;
              var carry = byte;
              for (var j = 0; j < result.length; ++j) {
                  var x = (base58Map[result[j]] << 8) + carry;
                  result[j] = base58Chars.charCodeAt(x % 58);
                  carry = (x / 58) | 0;
              }
              while (carry) {
                  result.push(base58Chars.charCodeAt(carry % 58));
                  carry = (carry / 58) | 0;
              }
          }
      }
      catch (e_2_1) { e_2 = { error: e_2_1 }; }
      finally {
          try {
              if (bignum_1_1 && !bignum_1_1.done && (_a = bignum_1.return)) _a.call(bignum_1);
          }
          finally { if (e_2) throw e_2.error; }
      }
      try {
          for (var bignum_2 = __values(bignum), bignum_2_1 = bignum_2.next(); !bignum_2_1.done; bignum_2_1 = bignum_2.next()) {
              var byte = bignum_2_1.value;
              if (byte) {
                  break;
              }
              else {
                  result.push('1'.charCodeAt(0));
              }
          }
      }
      catch (e_3_1) { e_3 = { error: e_3_1 }; }
      finally {
          try {
              if (bignum_2_1 && !bignum_2_1.done && (_b = bignum_2.return)) _b.call(bignum_2);
          }
          finally { if (e_3) throw e_3.error; }
      }
      result.reverse();
      return String.fromCharCode.apply(String, __spreadArray([], __read(result)));
  };
  exports.binaryToBase58 = binaryToBase58;
  /** Convert an unsigned base-64 number in `s` to a bignum */
  var base64ToBinary = function (s) {
      var len = s.length;
      if ((len & 3) === 1 && s[len - 1] === '=') {
          len -= 1;
      } // fc appends an extra '='
      if ((len & 3) !== 0) {
          throw new Error('base-64 value is not padded correctly');
      }
      var groups = len >> 2;
      var bytes = groups * 3;
      if (len > 0 && s[len - 1] === '=') {
          if (s[len - 2] === '=') {
              bytes -= 2;
          }
          else {
              bytes -= 1;
          }
      }
      var result = new Uint8Array(bytes);
      for (var group = 0; group < groups; ++group) {
          var digit0 = base64Map[s.charCodeAt(group * 4 + 0)];
          var digit1 = base64Map[s.charCodeAt(group * 4 + 1)];
          var digit2 = base64Map[s.charCodeAt(group * 4 + 2)];
          var digit3 = base64Map[s.charCodeAt(group * 4 + 3)];
          result[group * 3 + 0] = (digit0 << 2) | (digit1 >> 4);
          if (group * 3 + 1 < bytes) {
              result[group * 3 + 1] = ((digit1 & 15) << 4) | (digit2 >> 2);
          }
          if (group * 3 + 2 < bytes) {
              result[group * 3 + 2] = ((digit2 & 3) << 6) | digit3;
          }
      }
      return result;
  };
  exports.base64ToBinary = base64ToBinary;
  /** Key types this library supports */
  var KeyType;
  (function (KeyType) {
      KeyType[KeyType["k1"] = 0] = "k1";
      KeyType[KeyType["r1"] = 1] = "r1";
      KeyType[KeyType["wa"] = 2] = "wa";
  })(KeyType = exports.KeyType || (exports.KeyType = {}));
  /** Public key data size, excluding type field */
  exports.publicKeyDataSize = 33;
  /** Private key data size, excluding type field */
  exports.privateKeyDataSize = 32;
  /** Signature data size, excluding type field */
  exports.signatureDataSize = 65;
  var digestSuffixRipemd160 = function (data, suffix) {
      var d = new Uint8Array(data.length + suffix.length);
      for (var i = 0; i < data.length; ++i) {
          d[i] = data[i];
      }
      for (var i = 0; i < suffix.length; ++i) {
          d[data.length + i] = suffix.charCodeAt(i);
      }
      return ripemd160(d);
  };
  var stringToKey = function (s, type, size, suffix) {
      var whole = exports.base58ToBinary(size ? size + 4 : 0, s);
      var result = { type: type, data: new Uint8Array(whole.buffer, 0, whole.length - 4) };
      var digest = new Uint8Array(digestSuffixRipemd160(result.data, suffix));
      if (digest[0] !== whole[whole.length - 4] || digest[1] !== whole[whole.length - 3]
          || digest[2] !== whole[whole.length - 2] || digest[3] !== whole[whole.length - 1]) {
          throw new Error('checksum doesn\'t match');
      }
      return result;
  };
  var keyToString = function (key, suffix, prefix) {
      var digest = new Uint8Array(digestSuffixRipemd160(key.data, suffix));
      var whole = new Uint8Array(key.data.length + 4);
      for (var i = 0; i < key.data.length; ++i) {
          whole[i] = key.data[i];
      }
      for (var i = 0; i < 4; ++i) {
          whole[i + key.data.length] = digest[i];
      }
      return prefix + exports.binaryToBase58(whole);
  };
  /** Convert key in `s` to binary form */
  var stringToPublicKey = function (s) {
      if (typeof s !== 'string') {
          throw new Error('expected string containing public key');
      }
      if (s.substr(0, 3) === 'EOS') {
          var whole = exports.base58ToBinary(exports.publicKeyDataSize + 4, s.substr(3));
          var key = { type: KeyType.k1, data: new Uint8Array(exports.publicKeyDataSize) };
          for (var i = 0; i < exports.publicKeyDataSize; ++i) {
              key.data[i] = whole[i];
          }
          var digest = new Uint8Array(ripemd160(key.data));
          if (digest[0] !== whole[exports.publicKeyDataSize] || digest[1] !== whole[34]
              || digest[2] !== whole[35] || digest[3] !== whole[36]) {
              throw new Error('checksum doesn\'t match');
          }
          return key;
      }
      else if (s.substr(0, 7) === 'PUB_K1_') {
          return stringToKey(s.substr(7), KeyType.k1, exports.publicKeyDataSize, 'K1');
      }
      else if (s.substr(0, 7) === 'PUB_R1_') {
          return stringToKey(s.substr(7), KeyType.r1, exports.publicKeyDataSize, 'R1');
      }
      else if (s.substr(0, 7) === 'PUB_WA_') {
          return stringToKey(s.substr(7), KeyType.wa, 0, 'WA');
      }
      else {
          throw new Error('unrecognized public key format');
      }
  };
  exports.stringToPublicKey = stringToPublicKey;
  /** Convert public `key` to legacy string (base-58) form */
  var publicKeyToLegacyString = function (key) {
      if (key.type === KeyType.k1 && key.data.length === exports.publicKeyDataSize) {
          return keyToString(key, '', 'EOS');
      }
      else if (key.type === KeyType.r1 || key.type === KeyType.wa) {
          throw new Error('Key format not supported in legacy conversion');
      }
      else {
          throw new Error('unrecognized public key format');
      }
  };
  exports.publicKeyToLegacyString = publicKeyToLegacyString;
  /** Convert `key` to string (base-58) form */
  var publicKeyToString = function (key) {
      if (key.type === KeyType.k1 && key.data.length === exports.publicKeyDataSize) {
          return keyToString(key, 'K1', 'PUB_K1_');
      }
      else if (key.type === KeyType.r1 && key.data.length === exports.publicKeyDataSize) {
          return keyToString(key, 'R1', 'PUB_R1_');
      }
      else if (key.type === KeyType.wa) {
          return keyToString(key, 'WA', 'PUB_WA_');
      }
      else {
          throw new Error('unrecognized public key format');
      }
  };
  exports.publicKeyToString = publicKeyToString;
  /** If a key is in the legacy format (`EOS` prefix), then convert it to the new format (`PUB_K1_`).
   * Leaves other formats untouched
   */
  var convertLegacyPublicKey = function (s) {
      if (s.substr(0, 3) === 'EOS') {
          return exports.publicKeyToString(exports.stringToPublicKey(s));
      }
      return s;
  };
  exports.convertLegacyPublicKey = convertLegacyPublicKey;
  /** If a key is in the legacy format (`EOS` prefix), then convert it to the new format (`PUB_K1_`).
   * Leaves other formats untouched
   */
  var convertLegacyPublicKeys = function (keys) {
      return keys.map(exports.convertLegacyPublicKey);
  };
  exports.convertLegacyPublicKeys = convertLegacyPublicKeys;
  /** Convert key in `s` to binary form */
  var stringToPrivateKey = function (s) {
      if (typeof s !== 'string') {
          throw new Error('expected string containing private key');
      }
      if (s.substr(0, 7) === 'PVT_R1_') {
          return stringToKey(s.substr(7), KeyType.r1, exports.privateKeyDataSize, 'R1');
      }
      else if (s.substr(0, 7) === 'PVT_K1_') {
          return stringToKey(s.substr(7), KeyType.k1, exports.privateKeyDataSize, 'K1');
      }
      else {
          // todo: Verify checksum: sha256(sha256(key.data)).
          //       Not critical since a bad key will fail to produce a
          //       valid signature anyway.
          var whole = exports.base58ToBinary(exports.privateKeyDataSize + 5, s);
          var key = { type: KeyType.k1, data: new Uint8Array(exports.privateKeyDataSize) };
          if (whole[0] !== 0x80) {
              throw new Error('unrecognized private key type');
          }
          for (var i = 0; i < exports.privateKeyDataSize; ++i) {
              key.data[i] = whole[i + 1];
          }
          return key;
      }
  };
  exports.stringToPrivateKey = stringToPrivateKey;
  /** Convert private `key` to legacy string (base-58) form */
  var privateKeyToLegacyString = function (key) {
      if (key.type === KeyType.k1 && key.data.length === exports.privateKeyDataSize) {
          var whole_1 = [];
          whole_1.push(128);
          key.data.forEach(function (byte) { return whole_1.push(byte); });
          var digest = new Uint8Array(hash_js_1.sha256().update(hash_js_1.sha256().update(whole_1).digest()).digest());
          var result = new Uint8Array(exports.privateKeyDataSize + 5);
          for (var i = 0; i < whole_1.length; i++) {
              result[i] = whole_1[i];
          }
          for (var i = 0; i < 4; i++) {
              result[i + whole_1.length] = digest[i];
          }
          return exports.binaryToBase58(result);
      }
      else if (key.type === KeyType.r1 || key.type === KeyType.wa) {
          throw new Error('Key format not supported in legacy conversion');
      }
      else {
          throw new Error('unrecognized public key format');
      }
  };
  exports.privateKeyToLegacyString = privateKeyToLegacyString;
  /** Convert `key` to string (base-58) form */
  var privateKeyToString = function (key) {
      if (key.type === KeyType.r1) {
          return keyToString(key, 'R1', 'PVT_R1_');
      }
      else if (key.type === KeyType.k1) {
          return keyToString(key, 'K1', 'PVT_K1_');
      }
      else {
          throw new Error('unrecognized private key format');
      }
  };
  exports.privateKeyToString = privateKeyToString;
  /** Convert key in `s` to binary form */
  var stringToSignature = function (s) {
      if (typeof s !== 'string') {
          throw new Error('expected string containing signature');
      }
      if (s.substr(0, 7) === 'SIG_K1_') {
          return stringToKey(s.substr(7), KeyType.k1, exports.signatureDataSize, 'K1');
      }
      else if (s.substr(0, 7) === 'SIG_R1_') {
          return stringToKey(s.substr(7), KeyType.r1, exports.signatureDataSize, 'R1');
      }
      else if (s.substr(0, 7) === 'SIG_WA_') {
          return stringToKey(s.substr(7), KeyType.wa, 0, 'WA');
      }
      else {
          throw new Error('unrecognized signature format');
      }
  };
  exports.stringToSignature = stringToSignature;
  /** Convert `signature` to string (base-58) form */
  var signatureToString = function (signature) {
      if (signature.type === KeyType.k1) {
          return keyToString(signature, 'K1', 'SIG_K1_');
      }
      else if (signature.type === KeyType.r1) {
          return keyToString(signature, 'R1', 'SIG_R1_');
      }
      else if (signature.type === KeyType.wa) {
          return keyToString(signature, 'WA', 'SIG_WA_');
      }
      else {
          throw new Error('unrecognized signature format');
      }
  };
  exports.signatureToString = signatureToString;

  }(eosjsNumeric));

  var eosjsRpcerror = {};

  /**
   * @module RPC-Error
   */
  // copyright defined in eosjs/LICENSE.txt
  var __extends = (commonjsGlobal && commonjsGlobal.__extends) || (function () {
      var extendStatics = function (d, b) {
          extendStatics = Object.setPrototypeOf ||
              ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
              function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
          return extendStatics(d, b);
      };
      return function (d, b) {
          if (typeof b !== "function" && b !== null)
              throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
          extendStatics(d, b);
          function __() { this.constructor = d; }
          d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
      };
  })();
  Object.defineProperty(eosjsRpcerror, "__esModule", { value: true });
  eosjsRpcerror.RpcError = void 0;
  /** Holds detailed error information */
  var RpcError = /** @class */ (function (_super) {
      __extends(RpcError, _super);
      function RpcError(json) {
          var _this = this;
          if (json.error && json.error.details && json.error.details.length && json.error.details[0].message) {
              _this = _super.call(this, json.error.details[0].message) || this;
              _this.details = json.error.details;
          }
          else if (json.processed && json.processed.except && json.processed.except.message) {
              _this = _super.call(this, json.processed.except.message) || this;
              _this.details = json.processed.except;
          }
          else if (json.result && json.result.except && json.result.except.message) {
              _this = _super.call(this, json.result.except.message) || this;
              _this.details = json.result.except;
          }
          else {
              _this = _super.call(this, json.message) || this;
          }
          Object.setPrototypeOf(_this, RpcError.prototype);
          _this.json = json;
          return _this;
      }
      return RpcError;
  }(Error));
  eosjsRpcerror.RpcError = RpcError;

  /**
   * @module JSON-RPC
   */
  // copyright defined in eosjs/LICENSE.txt
  var __awaiter = (commonjsGlobal && commonjsGlobal.__awaiter) || function (thisArg, _arguments, P, generator) {
      function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
      return new (P || (P = Promise))(function (resolve, reject) {
          function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
          function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
          function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
          step((generator = generator.apply(thisArg, _arguments || [])).next());
      });
  };
  var __generator = (commonjsGlobal && commonjsGlobal.__generator) || function (thisArg, body) {
      var _ = { label: 0, sent: function() { if (t[0] & 1) throw t[1]; return t[1]; }, trys: [], ops: [] }, f, y, t, g;
      return g = { next: verb(0), "throw": verb(1), "return": verb(2) }, typeof Symbol === "function" && (g[Symbol.iterator] = function() { return this; }), g;
      function verb(n) { return function (v) { return step([n, v]); }; }
      function step(op) {
          if (f) throw new TypeError("Generator is already executing.");
          while (_) try {
              if (f = 1, y && (t = op[0] & 2 ? y["return"] : op[0] ? y["throw"] || ((t = y["return"]) && t.call(y), 0) : y.next) && !(t = t.call(y, op[1])).done) return t;
              if (y = 0, t) op = [op[0] & 2, t.value];
              switch (op[0]) {
                  case 0: case 1: t = op; break;
                  case 4: _.label++; return { value: op[1], done: false };
                  case 5: _.label++; y = op[1]; op = [0]; continue;
                  case 7: op = _.ops.pop(); _.trys.pop(); continue;
                  default:
                      if (!(t = _.trys, t = t.length > 0 && t[t.length - 1]) && (op[0] === 6 || op[0] === 2)) { _ = 0; continue; }
                      if (op[0] === 3 && (!t || (op[1] > t[0] && op[1] < t[3]))) { _.label = op[1]; break; }
                      if (op[0] === 6 && _.label < t[1]) { _.label = t[1]; t = op; break; }
                      if (t && _.label < t[2]) { _.label = t[2]; _.ops.push(op); break; }
                      if (t[2]) _.ops.pop();
                      _.trys.pop(); continue;
              }
              op = body.call(thisArg, _);
          } catch (e) { op = [6, e]; y = 0; } finally { f = t = 0; }
          if (op[0] & 5) throw op[1]; return { value: op[0] ? op[1] : void 0, done: true };
      }
  };
  var __values = (commonjsGlobal && commonjsGlobal.__values) || function(o) {
      var s = typeof Symbol === "function" && Symbol.iterator, m = s && o[s], i = 0;
      if (m) return m.call(o);
      if (o && typeof o.length === "number") return {
          next: function () {
              if (o && i >= o.length) o = void 0;
              return { value: o && o[i++], done: !o };
          }
      };
      throw new TypeError(s ? "Object is not iterable." : "Symbol.iterator is not defined.");
  };
  Object.defineProperty(eosjsJsonrpc, "__esModule", { value: true });
  var JsonRpc_1 = eosjsJsonrpc.JsonRpc = void 0;
  var eosjs_numeric_1 = eosjsNumeric;
  var eosjs_rpcerror_1 = eosjsRpcerror;
  var arrayToHex = function (data) {
      var e_1, _a;
      var result = '';
      try {
          for (var data_1 = __values(data), data_1_1 = data_1.next(); !data_1_1.done; data_1_1 = data_1.next()) {
              var x = data_1_1.value;
              result += ('00' + x.toString(16)).slice(-2);
          }
      }
      catch (e_1_1) { e_1 = { error: e_1_1 }; }
      finally {
          try {
              if (data_1_1 && !data_1_1.done && (_a = data_1.return)) _a.call(data_1);
          }
          finally { if (e_1) throw e_1.error; }
      }
      return result;
  };
  /** Make RPC calls */
  var JsonRpc = /** @class */ (function () {
      /**
       * @param args
       * `fetch`:
       * browsers: leave `null` or `undefined`
       * node: provide an implementation
       */
      function JsonRpc(endpoint, args) {
          if (args === void 0) { args = {}; }
          this.endpoint = endpoint.replace(/\/$/, '');
          if (args.fetch) {
              this.fetchBuiltin = args.fetch;
          }
          else {
              this.fetchBuiltin = commonjsGlobal.fetch;
          }
      }
      /** Post `body` to `endpoint + path`. Throws detailed error information in `RpcError` when available. */
      JsonRpc.prototype.fetch = function (path, body) {
          return __awaiter(this, void 0, void 0, function () {
              var response, json, f, e_2;
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0:
                          _a.trys.push([0, 3, , 4]);
                          f = this.fetchBuiltin;
                          return [4 /*yield*/, f(this.endpoint + path, {
                                  body: JSON.stringify(body),
                                  method: 'POST',
                              })];
                      case 1:
                          response = _a.sent();
                          return [4 /*yield*/, response.json()];
                      case 2:
                          json = _a.sent();
                          if (json.processed && json.processed.except) {
                              throw new eosjs_rpcerror_1.RpcError(json);
                          }
                          else if (json.result && json.result.except) {
                              throw new eosjs_rpcerror_1.RpcError(json);
                          }
                          return [3 /*break*/, 4];
                      case 3:
                          e_2 = _a.sent();
                          e_2.isFetchError = true;
                          throw e_2;
                      case 4:
                          if (!response.ok) {
                              throw new eosjs_rpcerror_1.RpcError(json);
                          }
                          return [2 /*return*/, json];
                  }
              });
          });
      };
      JsonRpc.prototype.abi_bin_to_json = function (code, action, binargs) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/abi_bin_to_json', { code: code, action: action, binargs: binargs })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      JsonRpc.prototype.abi_json_to_bin = function (code, action, args) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/abi_json_to_bin', { code: code, action: action, args: args })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_abi` */
      JsonRpc.prototype.get_abi = function (accountName) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_abi', { account_name: accountName })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_account` */
      JsonRpc.prototype.get_account = function (accountName) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_account', { account_name: accountName })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_accounts_by_authorizers` */
      JsonRpc.prototype.get_accounts_by_authorizers = function (accounts, keys) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_accounts_by_authorizers', { accounts: accounts, keys: keys })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `get_activated_protocol_features` */
      JsonRpc.prototype.get_activated_protocol_features = function (_a) {
          var _b = _a.limit, limit = _b === void 0 ? 10 : _b, _c = _a.search_by_block_num, search_by_block_num = _c === void 0 ? false : _c, _d = _a.reverse, reverse = _d === void 0 ? false : _d, _e = _a.lower_bound, lower_bound = _e === void 0 ? null : _e, _f = _a.upper_bound, upper_bound = _f === void 0 ? null : _f;
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_g) {
                  switch (_g.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_activated_protocol_features', { lower_bound: lower_bound, upper_bound: upper_bound, limit: limit, search_by_block_num: search_by_block_num, reverse: reverse })];
                      case 1: return [2 /*return*/, _g.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_block_header_state` */
      JsonRpc.prototype.get_block_header_state = function (blockNumOrId) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_block_header_state', { block_num_or_id: blockNumOrId })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_block_info` */
      JsonRpc.prototype.get_block_info = function (blockNum) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_block_info', { block_num: blockNum })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_block` */
      JsonRpc.prototype.get_block = function (blockNumOrId) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_block', { block_num_or_id: blockNumOrId })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_code` */
      JsonRpc.prototype.get_code = function (accountName) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_code', {
                              account_name: accountName,
                              code_as_wasm: true
                          })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_code_hash` */
      JsonRpc.prototype.get_code_hash = function (accountName) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_code_hash', { account_name: accountName })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_currency_balance` */
      JsonRpc.prototype.get_currency_balance = function (code, account, symbol) {
          if (symbol === void 0) { symbol = null; }
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_currency_balance', { code: code, account: account, symbol: symbol })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_currency_stats` */
      JsonRpc.prototype.get_currency_stats = function (code, symbol) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_currency_stats', { code: code, symbol: symbol })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_info` */
      JsonRpc.prototype.get_info = function () {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_info', {})];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_producer_schedule` */
      JsonRpc.prototype.get_producer_schedule = function () {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_producer_schedule', {})];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_producers` */
      JsonRpc.prototype.get_producers = function (json, lowerBound, limit) {
          if (json === void 0) { json = true; }
          if (lowerBound === void 0) { lowerBound = ''; }
          if (limit === void 0) { limit = 50; }
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_producers', { json: json, lower_bound: lowerBound, limit: limit })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_raw_code_and_abi` */
      JsonRpc.prototype.get_raw_code_and_abi = function (accountName) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_raw_code_and_abi', { account_name: accountName })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** calls `/v1/chain/get_raw_code_and_abi` and pulls out unneeded raw wasm code */
      JsonRpc.prototype.getRawAbi = function (accountName) {
          return __awaiter(this, void 0, void 0, function () {
              var rawAbi, abi;
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.get_raw_abi(accountName)];
                      case 1:
                          rawAbi = _a.sent();
                          abi = eosjs_numeric_1.base64ToBinary(rawAbi.abi);
                          return [2 /*return*/, { accountName: rawAbi.account_name, abi: abi }];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_raw_abi` */
      JsonRpc.prototype.get_raw_abi = function (accountName) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_raw_abi', { account_name: accountName })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_scheduled_transactions` */
      JsonRpc.prototype.get_scheduled_transactions = function (json, lowerBound, limit) {
          if (json === void 0) { json = true; }
          if (lowerBound === void 0) { lowerBound = ''; }
          if (limit === void 0) { limit = 50; }
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_scheduled_transactions', { json: json, lower_bound: lowerBound, limit: limit })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_table_rows` */
      JsonRpc.prototype.get_table_rows = function (_a) {
          var _b = _a.json, json = _b === void 0 ? true : _b, code = _a.code, scope = _a.scope, table = _a.table, _c = _a.lower_bound, lower_bound = _c === void 0 ? '' : _c, _d = _a.upper_bound, upper_bound = _d === void 0 ? '' : _d, _e = _a.index_position, index_position = _e === void 0 ? 1 : _e, _f = _a.key_type, key_type = _f === void 0 ? '' : _f, _g = _a.limit, limit = _g === void 0 ? 10 : _g, _h = _a.reverse, reverse = _h === void 0 ? false : _h, _j = _a.show_payer, show_payer = _j === void 0 ? false : _j;
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_k) {
                  switch (_k.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_table_rows', {
                              json: json,
                              code: code,
                              scope: scope,
                              table: table,
                              lower_bound: lower_bound,
                              upper_bound: upper_bound,
                              index_position: index_position,
                              key_type: key_type,
                              limit: limit,
                              reverse: reverse,
                              show_payer: show_payer,
                          })];
                      case 1: return [2 /*return*/, _k.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_kv_table_rows` */
      JsonRpc.prototype.get_kv_table_rows = function (_a) {
          var _b = _a.json, json = _b === void 0 ? true : _b, code = _a.code, table = _a.table, index_name = _a.index_name, _c = _a.encode_type, encode_type = _c === void 0 ? 'bytes' : _c, index_value = _a.index_value, lower_bound = _a.lower_bound, upper_bound = _a.upper_bound, _d = _a.limit, limit = _d === void 0 ? 10 : _d, _e = _a.reverse, reverse = _e === void 0 ? false : _e, _f = _a.show_payer, show_payer = _f === void 0 ? false : _f;
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_g) {
                  switch (_g.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_kv_table_rows', {
                              json: json,
                              code: code,
                              table: table,
                              index_name: index_name,
                              encode_type: encode_type,
                              index_value: index_value,
                              lower_bound: lower_bound,
                              upper_bound: upper_bound,
                              limit: limit,
                              reverse: reverse,
                              show_payer: show_payer,
                          })];
                      case 1: return [2 /*return*/, _g.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/get_table_by_scope` */
      JsonRpc.prototype.get_table_by_scope = function (_a) {
          var code = _a.code, table = _a.table, _b = _a.lower_bound, lower_bound = _b === void 0 ? '' : _b, _c = _a.upper_bound, upper_bound = _c === void 0 ? '' : _c, _d = _a.limit, limit = _d === void 0 ? 10 : _d;
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_e) {
                  switch (_e.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/get_table_by_scope', {
                              code: code,
                              table: table,
                              lower_bound: lower_bound,
                              upper_bound: upper_bound,
                              limit: limit,
                          })];
                      case 1: return [2 /*return*/, _e.sent()];
                  }
              });
          });
      };
      /** Get subset of `availableKeys` needed to meet authorities in `transaction`. Implements `AuthorityProvider` */
      JsonRpc.prototype.getRequiredKeys = function (args) {
          return __awaiter(this, void 0, void 0, function () {
              var _a;
              return __generator(this, function (_b) {
                  switch (_b.label) {
                      case 0:
                          _a = eosjs_numeric_1.convertLegacyPublicKeys;
                          return [4 /*yield*/, this.fetch('/v1/chain/get_required_keys', {
                                  transaction: args.transaction,
                                  available_keys: args.availableKeys,
                              })];
                      case 1: return [2 /*return*/, _a.apply(void 0, [(_b.sent()).required_keys])];
                  }
              });
          });
      };
      /** Push a serialized transaction (replaced by send_transaction, but returned format has changed) */
      JsonRpc.prototype.push_transaction = function (_a) {
          var signatures = _a.signatures, _b = _a.compression, compression = _b === void 0 ? 0 : _b, serializedTransaction = _a.serializedTransaction, serializedContextFreeData = _a.serializedContextFreeData;
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_c) {
                  switch (_c.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/push_transaction', {
                              signatures: signatures,
                              compression: compression,
                              packed_context_free_data: arrayToHex(serializedContextFreeData || new Uint8Array(0)),
                              packed_trx: arrayToHex(serializedTransaction),
                          })];
                      case 1: return [2 /*return*/, _c.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/chain/push_ro_transaction */
      JsonRpc.prototype.push_ro_transaction = function (_a, returnFailureTraces) {
          var signatures = _a.signatures, _b = _a.compression, compression = _b === void 0 ? 0 : _b, serializedTransaction = _a.serializedTransaction;
          if (returnFailureTraces === void 0) { returnFailureTraces = false; }
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_c) {
                  switch (_c.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/push_ro_transaction', {
                              transaction: {
                                  signatures: signatures,
                                  compression: compression,
                                  packed_context_free_data: arrayToHex(new Uint8Array(0)),
                                  packed_trx: arrayToHex(serializedTransaction),
                              },
                              return_failure_traces: returnFailureTraces,
                          })];
                      case 1: return [2 /*return*/, _c.sent()];
                  }
              });
          });
      };
      JsonRpc.prototype.push_transactions = function (transactions) {
          return __awaiter(this, void 0, void 0, function () {
              var packedTrxs;
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0:
                          packedTrxs = transactions.map(function (_a) {
                              var signatures = _a.signatures, _b = _a.compression, compression = _b === void 0 ? 0 : _b, serializedTransaction = _a.serializedTransaction, serializedContextFreeData = _a.serializedContextFreeData;
                              return {
                                  signatures: signatures,
                                  compression: compression,
                                  packed_context_free_data: arrayToHex(serializedContextFreeData || new Uint8Array(0)),
                                  packed_trx: arrayToHex(serializedTransaction),
                              };
                          });
                          return [4 /*yield*/, this.fetch('/v1/chain/push_transactions', packedTrxs)];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Send a serialized transaction */
      JsonRpc.prototype.send_transaction = function (_a) {
          var signatures = _a.signatures, _b = _a.compression, compression = _b === void 0 ? 0 : _b, serializedTransaction = _a.serializedTransaction, serializedContextFreeData = _a.serializedContextFreeData;
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_c) {
                  switch (_c.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/chain/send_transaction', {
                              signatures: signatures,
                              compression: compression,
                              packed_context_free_data: arrayToHex(serializedContextFreeData || new Uint8Array(0)),
                              packed_trx: arrayToHex(serializedTransaction),
                          })];
                      case 1: return [2 /*return*/, _c.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/db_size/get` */
      JsonRpc.prototype.db_size_get = function () {
          return __awaiter(this, void 0, void 0, function () { return __generator(this, function (_a) {
              switch (_a.label) {
                  case 0: return [4 /*yield*/, this.fetch('/v1/db_size/get', {})];
                  case 1: return [2 /*return*/, _a.sent()];
              }
          }); });
      };
      /** Raw call to `/v1/trace_api/get_block` */
      JsonRpc.prototype.trace_get_block = function (block_num) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/trace_api/get_block', { block_num: block_num })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/history/get_actions` */
      JsonRpc.prototype.history_get_actions = function (accountName, pos, offset) {
          if (pos === void 0) { pos = null; }
          if (offset === void 0) { offset = null; }
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/history/get_actions', { account_name: accountName, pos: pos, offset: offset })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/history/get_transaction` */
      JsonRpc.prototype.history_get_transaction = function (id, blockNumHint) {
          if (blockNumHint === void 0) { blockNumHint = null; }
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/history/get_transaction', { id: id, block_num_hint: blockNumHint })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/history/get_key_accounts` */
      JsonRpc.prototype.history_get_key_accounts = function (publicKey) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/history/get_key_accounts', { public_key: publicKey })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      /** Raw call to `/v1/history/get_controlled_accounts` */
      JsonRpc.prototype.history_get_controlled_accounts = function (controllingAccount) {
          return __awaiter(this, void 0, void 0, function () {
              return __generator(this, function (_a) {
                  switch (_a.label) {
                      case 0: return [4 /*yield*/, this.fetch('/v1/history/get_controlled_accounts', { controlling_account: controllingAccount })];
                      case 1: return [2 /*return*/, _a.sent()];
                  }
              });
          });
      };
      return JsonRpc;
  }()); // JsonRpc
  JsonRpc_1 = eosjsJsonrpc.JsonRpc = JsonRpc;

  var RPC_ENDPOINT = "https://telos.greymass.com";
  var API_ENDPOINT = "http://api-tokensale.hypha.earth";
  var EOS_DECIMAL_PLACES = 4;
  var BTC_DECIMAL_PLACES = 8;

  var initRPC = function initRPC() {
    var rpcEndpoint = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : RPC_ENDPOINT;
    return new JsonRpc_1(rpcEndpoint, {
      fetch
    });
  };

  var initAPI = function initAPI(apiEndpoint) {
    return /*#__PURE__*/function () {
      var _ref = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee(endpoint) {
        var url, response;
        return regeneratorRuntime.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                url = `${apiEndpoint}/${endpoint}`;
                _context.next = 3;
                return fetch(url, {
                  headers: {
                    "Content-Type": "application/json"
                  }
                });

              case 3:
                response = _context.sent;
                return _context.abrupt("return", response.json());

              case 5:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }));

      return function (_x) {
        return _ref.apply(this, arguments);
      };
    }();
  };

  var HyphaTokenSale = /*#__PURE__*/function () {
    function HyphaTokenSale() {
      var _this = this;

      var rpcEndpoint = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : RPC_ENDPOINT;
      var apiEndpoint = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : API_ENDPOINT;

      _classCallCheck$1(this, HyphaTokenSale);

      _defineProperty(this, "getAccountDetails", function (accountName) {
        return _this.seedsContract.getProfile(accountName);
      });

      this.init = this.init.bind(this);
      this.init();
      this.rpcEndpoint = rpcEndpoint;
      this.apiEndpoint = apiEndpoint;
      this.convertHyphaToEOS = this.convertHyphaToEOS.bind(this);
      this.convertHyphaToBTC = this.convertHyphaToBTC.bind(this);
    }

    _createClass$1(HyphaTokenSale, [{
      key: "init",
      value: function () {
        var _init = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee() {
          var rpcEndpoint, apiEndpoint, callApi, rpc, hyphaContract, seedsContract, tokenSaleAPI, roundDetails, roundNo, usdPerHypha, hyphaRemainingThisRound;
          return regeneratorRuntime.wrap(function _callee$(_context) {
            while (1) {
              switch (_context.prev = _context.next) {
                case 0:
                  rpcEndpoint = this.rpcEndpoint, apiEndpoint = this.apiEndpoint;
                  callApi = initAPI(apiEndpoint);
                  rpc = initRPC(rpcEndpoint);
                  hyphaContract = new HyphaSaleContract(rpc);
                  seedsContract = new SeedsContract(rpc);
                  tokenSaleAPI = new TokenSale(callApi);
                  this.hyphaContract = hyphaContract;
                  this.seedsContract = seedsContract;
                  this.tokenSaleAPI = tokenSaleAPI;
                  _context.next = 11;
                  return hyphaContract.getRoundDetails();

                case 11:
                  roundDetails = _context.sent;
                  roundNo = roundDetails.roundNo, usdPerHypha = roundDetails.usdPerHypha, hyphaRemainingThisRound = roundDetails.hyphaRemainingThisRound;
                  this.roundNo = roundNo;
                  this.usdPerHypha = usdPerHypha;
                  this.hyphaRemainingThisRound = hyphaRemainingThisRound;
                  return _context.abrupt("return", roundDetails);

                case 17:
                case "end":
                  return _context.stop();
              }
            }
          }, _callee, this);
        }));

        function init() {
          return _init.apply(this, arguments);
        }

        return init;
      }()
    }, {
      key: "selectPaymentMethod",
      value: function () {
        var _selectPaymentMethod = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee2(paymentMethod) {
          return regeneratorRuntime.wrap(function _callee2$(_context2) {
            while (1) {
              switch (_context2.prev = _context2.next) {
                case 0:
                  this.paymentMethod = paymentMethod;

                case 1:
                case "end":
                  return _context2.stop();
              }
            }
          }, _callee2, this);
        }));

        function selectPaymentMethod(_x) {
          return _selectPaymentMethod.apply(this, arguments);
        }

        return selectPaymentMethod;
      }()
    }, {
      key: "convertHyphaToEOS",
      value: function () {
        var _convertHyphaToEOS = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee3(hypha) {
          var usdPerHypha, roundDetails, usd, eos;
          return regeneratorRuntime.wrap(function _callee3$(_context3) {
            while (1) {
              switch (_context3.prev = _context3.next) {
                case 0:
                  usdPerHypha = this.usdPerHypha;

                  if (usdPerHypha) {
                    _context3.next = 6;
                    break;
                  }

                  _context3.next = 4;
                  return this.init();

                case 4:
                  roundDetails = _context3.sent;
                  usdPerHypha = roundDetails.usdPerHypha;

                case 6:
                  usd = Math.round(this.usdPerHypha * hypha * 100) / 100;
                  _context3.next = 9;
                  return this.tokenSaleAPI.usdToEos(usd);

                case 9:
                  eos = _context3.sent;
                  return _context3.abrupt("return", Number(eos).toFixed(EOS_DECIMAL_PLACES));

                case 11:
                case "end":
                  return _context3.stop();
              }
            }
          }, _callee3, this);
        }));

        function convertHyphaToEOS(_x2) {
          return _convertHyphaToEOS.apply(this, arguments);
        }

        return convertHyphaToEOS;
      }()
    }, {
      key: "convertHyphaToBTC",
      value: function () {
        var _convertHyphaToBTC = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee4(hypha) {
          var usdPerHypha, roundDetails, usd, btc;
          return regeneratorRuntime.wrap(function _callee4$(_context4) {
            while (1) {
              switch (_context4.prev = _context4.next) {
                case 0:
                  usdPerHypha = this.usdPerHypha;

                  if (usdPerHypha) {
                    _context4.next = 6;
                    break;
                  }

                  _context4.next = 4;
                  return this.init();

                case 4:
                  roundDetails = _context4.sent;
                  usdPerHypha = roundDetails.usdPerHypha;

                case 6:
                  usd = Math.round(this.usdPerHypha * hypha * 100) / 100;
                  _context4.next = 9;
                  return this.tokenSaleAPI.usdToBtc(usd);

                case 9:
                  btc = _context4.sent;
                  return _context4.abrupt("return", Number(btc).toFixed(BTC_DECIMAL_PLACES));

                case 11:
                case "end":
                  return _context4.stop();
              }
            }
          }, _callee4, this);
        }));

        function convertHyphaToBTC(_x3) {
          return _convertHyphaToBTC.apply(this, arguments);
        }

        return convertHyphaToBTC;
      }()
    }, {
      key: "convertHyphaToUSD",
      value: function () {
        var _convertHyphaToUSD = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee5(hypha) {
          var usdPerHypha, usd;
          return regeneratorRuntime.wrap(function _callee5$(_context5) {
            while (1) {
              switch (_context5.prev = _context5.next) {
                case 0:
                  usdPerHypha = this.usdPerHypha;

                  if (!usdPerHypha) {
                    _context5.next = 4;
                    break;
                  }

                  _context5.next = 4;
                  return this.init();

                case 4:
                  usd = Math.round(this.usdPerHypha * hypha * 100) / 100;
                  return _context5.abrupt("return", usd);

                case 6:
                case "end":
                  return _context5.stop();
              }
            }
          }, _callee5, this);
        }));

        function convertHyphaToUSD(_x4) {
          return _convertHyphaToUSD.apply(this, arguments);
        }

        return convertHyphaToUSD;
      }()
    }, {
      key: "getBitcoinAddress",
      value: function () {
        var _getBitcoinAddress = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee6(accountName) {
          var _yield$this$tokenSale, bitcoinAddress;

          return regeneratorRuntime.wrap(function _callee6$(_context6) {
            while (1) {
              switch (_context6.prev = _context6.next) {
                case 0:
                  _context6.next = 2;
                  return this.tokenSaleAPI.findMemberAddress(accountName);

                case 2:
                  _yield$this$tokenSale = _context6.sent;
                  bitcoinAddress = _yield$this$tokenSale.bitcoinAddress;
                  return _context6.abrupt("return", bitcoinAddress);

                case 5:
                case "end":
                  return _context6.stop();
              }
            }
          }, _callee6, this);
        }));

        function getBitcoinAddress(_x5) {
          return _getBitcoinAddress.apply(this, arguments);
        }

        return getBitcoinAddress;
      }()
    }]);

    return HyphaTokenSale;
  }();

  return HyphaTokenSale;

}));
