<x-app-layout>
    <div class="py-12 bg-gray-100 dark:bg-gray-900 min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            
            <div class="relative overflow-hidden bg-white dark:bg-gray-800 shadow-2xl sm:rounded-3xl border border-gray-200 dark:border-gray-700">
                
                <div class="absolute top-0 w-full h-32 bg-gradient-to-b from-yellow-200/20 to-transparent pointer-events-none"></div>

                <div class="relative z-10 p-8 flex flex-col items-center text-center">
                    
                    <div class="mb-8 inline-flex items-center gap-2 rounded-full bg-green-100 dark:bg-green-900/30 px-4 py-1.5 text-xs font-bold text-green-700 dark:text-green-400 border border-green-200 dark:border-green-800 shadow-sm">
                        <svg class="w-3 h-3 animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        RECOMPENSA RECLAMADA
                    </div>

                    <div class="relative mb-8 group cursor-pointer hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-yellow-400/20 blur-3xl rounded-full opacity-50 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <span class="text-9xl drop-shadow-2xl filter contrast-125 select-none block animate-[bounce_3s_infinite]">
                            🥔
                        </span>
                    </div>

                    <h3 class="text-4xl font-black text-gray-900 dark:text-white tracking-tight mb-2">
                        ¡Hola, {{ Auth::user()->name }}!
                    </h3>
                    <p class="text-lg text-gray-500 dark:text-gray-400 max-w-lg mx-auto">
                        Ten la papa que te prometimos.
                    </p>

                    <div class="mt-10 w-full bg-gray-50 dark:bg-gray-900/50 rounded-2xl border border-gray-200 dark:border-gray-700 overflow-hidden shadow-inner">
                        
                        <div class="grid grid-cols-3 divide-x divide-gray-200 dark:divide-gray-700">
                            
                            <div class="p-5 flex flex-col items-center justify-center hover:bg-gray-100 dark:hover:bg-gray-700/30 transition-colors">
                                <span class="text-[10px] font-extrabold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-1">RAREZA</span>
                                <span class="text-xl font-black text-purple-600 dark:text-purple-400">PAPA</span>
                            </div>

                            <div class="p-5 flex flex-col items-center justify-center hover:bg-gray-100 dark:hover:bg-gray-700/30 transition-colors">
                                <span class="text-[10px] font-extrabold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-1">ESTADO</span>
                                <span class="text-xl font-black text-green-600 dark:text-green-400">COMESTIBLE</span>
                            </div>

                            <div class="p-5 flex flex-col items-center justify-center hover:bg-gray-100 dark:hover:bg-gray-700/30 transition-colors">
                                <span class="text-[10px] font-extrabold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-1">VALOR</span>
                                <span class="text-xl font-black text-gray-900 dark:text-white">5 PESO</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>