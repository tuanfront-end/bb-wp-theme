import React from "react";

export interface NextProps {
  onClick?: () => void;
  isNext?: boolean;
}

const Next: React.FC<NextProps> = ({ onClick, isNext = true }) => {
  return (
    <button
      className="bb-Next w-14 h-14 bg-white shadow-md flex items-center justify-center text-2xl leading-none rounded-full focus:outline-none focus:ring-2 focus:ring-blue-700"
      onClick={onClick}
    >
      {isNext ? (
        <i className="las la-angle-right"></i>
      ) : (
        <i className="las la-angle-left"></i>
      )}
    </button>
  );
};

export default Next;
