import { Dialog, Transition } from '@headlessui/react'
import { Fragment, useState } from 'react'
import { faSquareXmark } from '@fortawesome/free-solid-svg-icons';
import { Inertia } from '@inertiajs/inertia';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

export default function WinModal({children}) {
  let [isOpen, setIsOpen] = useState(true)

  function closeModal() {
    setIsOpen(false)
  }

  function openModal() {
    setIsOpen(true)
  }
  function cerrar(){
    Inertia.get(route('d.solicituds'));
  }

  return (
    <>
      
      <Transition appear show={isOpen} as={Fragment}>
        <Dialog as="div" className="relative z-10" onClose={closeModal}>
          <Transition.Child
            as={Fragment}
            enter="ease-out duration-300"
            enterFrom="opacity-0"
            enterTo="opacity-100"
            leave="ease-in duration-200"
            leaveFrom="opacity-100"
            leaveTo="opacity-0"
          >
            <div className="fixed inset-0 bg-black bg-opacity-25" />
          </Transition.Child>

          <div className="fixed inset-0 overflow-y-auto">
            <div className="flex min-h-full items-center justify-center p-4 text-center">
              <Transition.Child
                as={Fragment}
                enter="ease-out duration-300"
                enterFrom="opacity-0 scale-95"
                enterTo="opacity-100 scale-100"
                leave="ease-in duration-200"
                leaveFrom="opacity-100 scale-100"
                leaveTo="opacity-0 scale-95"
              >
                <Dialog.Panel className="w-full max-w-md transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all">
                  <div className='flex inline-flex place-content-between w-full py-2'>
                  <Dialog.Title
                    as="h3"
                    className="text-lg font-medium leading-6 text-green-900"
                  >
                    Especificacion Equipo 

                  </Dialog.Title>
                  <button
                      type="button"
                      className="bg-transparent text-lg font-medium text-red-700 hover:text-red-800 focus:outline-none "
                      onClick={cerrar}
                    >
                      <FontAwesomeIcon className="h-7 w-10 "  icon={faSquareXmark} style={open?{transform: 'rotate(0deg)',}:{transform: 'rotate(180deg)'}} /> 
                    </button>

                  </div>
                  
                    {children}
                  
                  <div className="mt-4">
                    <button
                      type="button"
                      className="inline-flex justify-center rounded-md border border-transparent bg-blue-100 px-4 py-2 text-sm font-medium text-blue-900 hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2"
                      onClick={cerrar}
                    >
                      Aceptar
                    </button>
                  </div>
                </Dialog.Panel>
              </Transition.Child>
            </div>
          </div>
        </Dialog>
      </Transition>
    </>
  )
}